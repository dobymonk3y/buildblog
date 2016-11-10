@extends('main')

@section('title','| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Slug:</dt>
                    <dd><a href="{{url($post->slug)}}">{{$post->slug}}</a></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Update:</dt>
                    <dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class' => 'btn btn-primary btn-block')) !!}
                        {{--<a href="#" class="btn btn-primary btn-block">Edit</a>--}}
                    </div>
                    <div class="col-sm-6">
                        {{--{!! Html::linkRoute('posts.destroy','Delete',array($post->id),array('class' => 'btn btn-danger btn-block')) !!}--}}
                        {{--<a href="#" class="btn btn-danger btn-block">Del</a>--}}
                        {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
                        {!! Form::submit('DELETE',['class'=>'btn btn-block btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                    <hr>
                    <div class="col-sm-12">
                        <!-- {!! link_to_route('posts.index', '<<  Show All Posts', [], array('class' => 'btn btn-default btn-block')) !!} -->
                        {!! Html::linkRoute('posts.index','<<  Show All Posts',[],array('class' => 'btn btn-default btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection