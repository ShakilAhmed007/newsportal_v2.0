<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HomeSectionElement;
use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    

    public function index()
    {
        $categories = Category::where('status', 1)->get();
        
        $sections = HomeSectionElement::with('category')->get();
        $featured = News::with('category')->where('on_featured', 1)->where('status', 1)->limit(11)->get();
        $videos = Video::latest()->limit(5)->get();

        $recentNews = News::with('category')->select('title', 'image', 'created_at', 'category_id', 'slug')->latest()->limit(4)->get();

        return view('frontend.pages.index', compact('featured', 'recentNews', 'sections', 'videos', 'categories'));
    }

    public function showByCategory($category)
    {
        $category = Category::where('categorySlug', $category)->first();
        if($category){
            $recentNews = News::with('category')->select('title', 'image', 'created_at', 'category_id', 'slug')->latest()->limit(4)->get();
            $categories = Category::where('status', 1)->get();
            $newses = News::where('category_id', $category->id)->paginate(9);
            return view('frontend.pages.category', compact('categories', 'category', 'newses', 'recentNews'));
        }else{
            return abort(404);
        }
        
    }

    public function showNews($cat, $slug)
    {
        $categories = Category::where('status', 1)->get();
        $news = News::where('slug', $slug)->first();
        $reletedNewses = News::where('category_id', $news->id)->where('id', '!=', $news->id)->latest()->limit(6)->get();
        $recentNews = News::with('category')->select('title', 'image', 'created_at', 'category_id', 'slug')->latest()->limit(4)->get();
        
        return view('frontend.pages.show', compact('news', 'categories', 'reletedNewses', 'recentNews'));
    }


    
}