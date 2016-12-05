<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class PostController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }

    /**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$posts = Post::orderBy('id','DESC')->paginate('10');
			return view('posts.index')->withPosts($posts);
		}
 
		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			$categories = Category::all();
			return view('posts.create')->withCategories($categories);
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			$this->validate($request, [
				'title' => 'required|max:255',
				'slug' => 'required|alpha_dash|min:5|max:10|unique:posts,slug',
                'category_id' => 'required|numeric',
				'body' => 'required',
			]);

            $str=$request->body;
            echo $str.'<br />';
            $arr=explode("\n",$str);
            $str1=nl2br($str);//回车换成换行

			$posts = new Post();
			$posts->title = $request->title;
			$posts->category_id = $request->category_id;
			$posts->slug = $request->slug;
			$posts->body = $str1;
			$posts->save();
			Session::flash('success','The blog post was successfully saved !');
			return redirect()->route('posts.show',$posts->id);
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			$post = Post::find($id);
			return view('posts.show')->withPost($post);
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			$post = Post::find($id);
            $categories = Category::all();
            $cats = [];
            foreach ($categories as $category){
                $cats[$category->id] = $category->name;
            }
			return view('posts.edit')->withPost($post)->withCats($cats);
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id)
		{
			$post = Post::find($id);
			if($request->input('slug') == $post->slug){
				$this->validate($request, [
					'title' => 'required|max:255',
                    'category_id' => 'required|numeric',
					'body' => 'required',
					]);
			}else{
				$this->validate($request, [
						'title' => 'required|max:255',
                        'category_id' => 'required|numeric',
						'slug' => 'required|alpha_dash|min:5|max:10|unique:posts,slug',
						'body' => 'required',
				]);
			}

            /*$str=$request->body;
            $arr=explode("\n",$str);
            $body='';
            foreach($arr as $k=>$v){
                $body .= $v;
            }
            //$body=nl2br($str);//回车换成换行
            dd($body);*/

            /*已经看完第36集. 完成了category的CURD和tag的添加.
            1 2 many的关系已经掌握, 需要熟练操作!
        many 2 many的关联关系, 两张表需要"媒介表"来进行关联, 可不使用timestamps数据.
        $timestamps = 'false';*/

//            $body = preg_split('/\r\n/',$request->body);
			$post->title = $request->input('title');
            $post->category_id = $request->input('category_id');
			$post->slug = $request->input('slug');
			$post->body = $request->body;
			$post->save();

			Session::flash('success','This post was successfully saved !');

			return redirect()->route('posts.show',$post->id);
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
//        	Post::destroy($id);
			$post = Post::find($id);
			$post->delete();
			Session::flash('deleteSuccess','The post was successfully deleted !');
			return redirect()->route('posts.index');
		}
}
