@extends('main')

@section('title','| Blog')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Blog</h1>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>{{$post->title}}</h2>
            <h5>PublishedAt: {{date('M j, Y',strtotime($post->created_at))}}</h5>
            <p>{{substr($post->body,0,80)}}{{strlen($post->body)>80 ? '...' :''}}</p>
            <a class="btn btn-primary" href="{{route('blog.single',$post->slug)}}">Read More</a>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">{!! $posts->render() !!}</div>
        </div>
    </div>
@endsection