@extends('main')
@section('title','| All Posts')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Post</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-info btn-block btn-h1-spacing">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created_at</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body,0,40) }}{{ strlen($post->body)>40 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</td>
                            <td>
                                <a href="{{ route('posts.show',$post->id) }}" class="btn btn-warning">View</a>
                                <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $posts->render() !!}
            </div>
        </div>
    </div>
@endsection