<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;


/**
 * 页面控制器
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at','DESC')->limit('4')->get();
        return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout()
    {
        $first = 'Frankie';
        $last = 'Zhang';
        $fullname = $first." ".$last;
        $email = "frankie@bengder.cc";
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }
    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact()
    {
        
    }
}
