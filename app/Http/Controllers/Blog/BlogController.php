<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class BlogController extends Controller
{
    public function index()
    {
       
        $posts=Post::where('category_id', '4')->latest()->paginate(6);
      
        return view('blog.index', compact('posts'));
    }

    public function postAll()
    {
        $posts=Post::where('category_id', '4')->latest()->paginate(12);
        return view('blog.articles.index', compact('posts'));
    }

    public function showPost(Post $post)
    {
      

        SEOTools::setTitle("$post->seo_title")->setDescription("$post->meta_description")->metatags()->setKeywords("$post->meta_keywords");
        


        $latestpost=Post::where('category_id', '4')->latest()->paginate(5);
        return view('blog.articles.postShow', compact('post', 'latestpost'));
    }


    public function sampleAll()
    {
        $samples=Post::where('category_id', '3')->latest()->paginate(6);
        return view('blog.sample.index', compact('samples'));
    }

    public function showSample(Post $post)
    {
        SEOTools::setTitle("$post->seo_title")->setDescription("$post->meta_description")->metatags()->setKeywords("$post->meta_keywords");

        $latestpost=Post::where('category_id', '3')->latest()->paginate(5);
        return view('blog.sample.showSample', compact('post', 'latestpost'));
    }



    public function us()
    {
       
        return view('blog.us');
    }
}
