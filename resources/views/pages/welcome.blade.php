@extends('main')

@section('title','|  Homepage')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="style.css">
@endsection

@section('content')
<!-- start of header-->
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1>Hello, world!</h1>
            <h1>Welcome to my blog!</h1>
            <p class="lead">Thank you for visiting , this is my test website built with Laravel ! Please read my popular post !</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>
</div>
<!-- end of header-->
<!-- start of sidebar-->
<div class="row">
    <div class="col-md-8">
        @foreach($posts as $post)
        <div class="post div-margin-top-15">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body,0,199) }}{{ strlen($post->body) > 199 ? "..." : " " }}</p>
            <a href="posts/{{$post->id}}" class="btn btn-primary">Read More&nbsp>></a>
            <!-- {!! Html::linkRoute('posts.show','Read More >>',$post->id,array('class'=>'btn btn-primary')) !!} -->
        </div>
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Side Bar</h2>
    </div>
</div>
<!-- end of sidebar-->
@endsection

@section('scripts')
    <link rel="stylesheet" type="text/css" href="">
@endsection