<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
class BlogController extends Controller
{
    //
    public function getBlogs(Request $request)
    {
        $categories = BlogCategory::getActive()->get();
        $blogs = Blog::getActive()->get();
        return view('website.blog',compact('categories','blogs'));
    }

    public function getBlogsByCategory(Request $request)
    {
        $categorySlug = $request->category_slug;
        $categories = BlogCategory::getActive()->get();
        $blogs = Blog::whereHas('category',function($q) use ($categorySlug){
            return $q->where('slug',$categorySlug);
        })->getActive()->get();
        if(!count($blogs))
        {
            abort(404);
        }
        return view('website.blog',compact('categories','blogs'));
    }
    public function showBlogDetails(Request $request)
    {
        $categories = BlogCategory::getActive()->get();
        $blog = Blog::where('slug',$request->slug)->first();
        if(empty($blog))
        {
            abort(404);
        }
        $allTags = Blog::getActive()->get(['tags']);
        $categoryId  = $blog->blog_category_id;
        $recentBlogs = Blog::getRecent()->limit('5')->get();
        $relatedBlogs = Blog::getActive()->where('blog_category_id',$categoryId)->orderBy('id','desc')->limit('10')->get();

        return view('website.blog-details',compact('categories','blog','recentBlogs','relatedBlogs','allTags'));
    }
}
