<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index ()
    {
        $posts=Post::latest()->paginate(6);
        return view('blog.index',compact('posts'));
    }

    public function postAll()
    {
        return view('blog.articles.index');
    }

    public function showPost(Post $post)
    {
        $latestpost=Post::latest()->paginate(5);
        return view('blog.articles.postShow',compact('post','latestpost'));
    }
}
