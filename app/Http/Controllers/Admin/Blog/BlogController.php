<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
class BlogController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::with('category')->select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = view('admin.blog.blogs.blogs-button', ['data' => $row]);
                    return $actionBtn;
                })
                ->editColumn('created_at', function ($data) {
                    return \Carbon\Carbon::parse($data->created_at)->isoFormat('DD/MM/YYYY');
                })
                ->rawColumns(['action'])
                ->make(true);
            }
            $categories = BlogCategory::getActive()->get();
        return view('admin.blog.blogs.blogs-index',compact('categories'));
    }
    public function create(Request $request)
    {
        $categories = BlogCategory::getActive()->get();
        return view('admin.blog.blogs.blogs-add-edit',compact('categories'));
    }
    
    public function uploadImage(Request $request)
    {
        // if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // $blog->clearMediaCollection('blog_image');
            $blogImage = new BlogImage();
            // $blogImage->file_name = 
            $blogImage->addMediaFromRequest('file')->toMediaCollection('image');
            $blogImage->save();
        // }
            $blogImage = BlogImage::find($blogImage->id);
            $url = $blogImage->getFirstMediaUrl('image', 'thumb');
            return response()->json(["link"=>$url]);
    }

    public function save(Request $request){
        $blogId = $request->blog_id ?? NULL;
        if (!empty($blogId)) {
            $request->validate([
                'blog_category_id'     =>  'required|exists:blog_categories,id',
                'title' => 'required|string|unique:blogs,title,'.$blogId,
                'slug' => 'required|string|unique:blogs,slug,'.$blogId,
                'tags' => 'required',
            ]);
            $message = "Blog Updated Successfully";
        } else {
            $request->validate([
                'title' => 'required|string|unique:blogs,title',
                'slug' => 'required|string|unique:blogs,slug',
                'tags' => 'required',
            ]);
            $message = "Blog Created Successfully";
        }
        // try {
            $blogCategory = $request->all();
            // return $blogCategory;
            $blog = Blog::updateOrCreate(['id'=>$blogId],$blogCategory);
            if ($request->hasFile('blog_image') && $request->file('blog_image')->isValid()) {
                $blog->clearMediaCollection('blog_image');
                $blog->addMediaFromRequest('blog_image')->toMediaCollection('blog_image');
            }
            $redirectUrl = route('admin.blog.blogs.list');
            return $this->responseJson(true,200,$message,['redirect_url'=>$redirectUrl]);
          
        // } catch (\Exception $ex) {
        //     throw new HttpResponseException($this->responseJson(false,400,$message));
        // }

    }

    public function getEdit(Request $request)
    {
        // re
        // return $request->uuid;
        $blog=Blog::where('uuid',$request->uuid)->first();
        $categories = BlogCategory::getActive()->get();
        return view('admin.blog.blogs.blogs-add-edit',compact('categories','blog'));
    }
    public function deleteRecord(Request $request)
    {
        // re
        $blogsDetails=Blog::where('uuid',$request->uuid)->first();
        // return $blogsDetails;
        $message ="Blog Not Found";
        
        try {
            if ($blogsDetails){
                $status=$blogsDetails->delete();
                $message ="Blog Deleted  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }
    public function updateStatus(Request $request)
    {
        $blogsDetails=Blog::where('uuid',$request->uuid)->first();
        // return $blogsDetails;
        $message ="Blog Not Found";
        
        try {
            if ($blogsDetails){
                $status=$blogsDetails->update(['status'=>$request->value]);
                $message ="Blog Deleted  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }
    }
}
