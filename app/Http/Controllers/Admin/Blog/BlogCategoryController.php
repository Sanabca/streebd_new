<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Blog\Category\CategoryResource;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;

use Exception;
use Illuminate\Support\Facades\Validator;
class BlogCategoryController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BlogCategory::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = view('admin.blog.category.category-button', ['data' => $row]);
                    return $actionBtn;
                })
                ->editColumn('created_at', function ($data) {
                    return \Carbon\Carbon::parse($data->created_at)->isoFormat('DD/MM/YYYY');
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        return view('admin.blog.category.category-index');
    }
    public function save(Request $request){
        $categoryId = $request->category_id ?? NULL;
        if (!empty($categoryId)) {
            $request->validate([
                'category_name'     =>  'required|string|unique:blog_categories,category_name,'.$categoryId,
                'category_description' => 'nullable|min:10|string',
                // 'role_type' => 'required|min:3|string',
            ]);
            $message = "Category Updated Successfully";
        } else {
            $request->validate([
                'category_name'     =>  'required|string|unique:blog_categories,category_name',
                'category_description' => 'nullable|min:10|string',
            ]);
            $message = "Category Created Successfully";
        }
        try {
            $blogCategory = $request->all();
            $isEffected = BlogCategory::updateOrCreate(['id'=>$categoryId],$blogCategory);
            return $this->responseJson(true,200,$message,$isEffected);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }
    public function getEdit(Request $request)
    {
        // re
        $categoryDetails=BlogCategory::where('uuid',$request->uuid)->first();
        // return $categoryDetails;
        $view = View::make('admin.blog.category.category-add-edit', ['data' => $categoryDetails]);
        $renderedView = $view->render();
        return $this->responseJson(true,200,"dsd",['html_view'=>$renderedView]);
    }
    public function deleteRecord(Request $request)
    {
        // re
        $categoryDetails=BlogCategory::where('uuid',$request->uuid)->first();
        // return $categoryDetails;
        $message ="Blog Category Not Found";
        
        try {
            if ($categoryDetails){
                $status=$categoryDetails->delete();
                $message ="Blog Category Deleted  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }
    public function updateStatus(Request $request)
    {
        $categoryDetails=BlogCategory::where('uuid',$request->uuid)->first();
        // return $categoryDetails;
        $message ="Blog Category Not Found";
        
        try {
            if ($categoryDetails){
                $status=$categoryDetails->update(['status'=>$request->value]);
                $message ="Blog Category Updated  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }
    }
}
