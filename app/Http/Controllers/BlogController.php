<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getSingle($slug)
    {
        $post = Post::where('slug','=',$slug)->first();
        return view('blog.single')->withPost($post);
    }

    public function getIndex()
    {
        $posts = Post::orderby('created_at','DESC')->paginate(10);
        return view('blog.index')->withPosts($posts);
    }
}
