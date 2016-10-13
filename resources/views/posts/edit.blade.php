@extends('main')

@section('title','| Edit The Post')

@section('content')
    <div class="row">
        {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'put']) !!}
        <div class="col-md-8">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title', null, ["class"=>"form-control"]) !!}
            {!! Form::label('body','Body:',['class'=>'form-spacing-top']) !!}
            {!! Form::textarea('body', null, ["class"=>"form-control"]) !!}
            <!-- <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p> -->
        </div>
        <div class="col-md-4">
            <div class="well">
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
                        <!-- {!! Html::linkRoute('posts.update','Save Changes',array($post->id),array('class' => 'btn btn-success btn-block')) !!} -->
                        <!-- <a href="#" class="btn btn-danger btn-block">Del</a> -->
                        {!! Form::submit('Save Changes',['class'=>'btn btn-primary btn-block']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class' => 'btn btn-danger btn-block')) !!}
                        {{--{!! Form::open(['route'=>['posts.show',$post->id],'method'=>'PUT']) !!}
                        {!! Form::submit('Cancel',['class'=>'btn btn-primary btn-block']) !!}
                        {!! Form::close() !!}--}}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection