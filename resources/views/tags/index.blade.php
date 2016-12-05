@extends('main')

@section('title','| All Tags')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created_At</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($tags))
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->created_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="well">
                {!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}
                <h2>New Tag</h2>
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
                {!! Form::submit('Create New Tag',['class'=>'btn btn-primary btn-block btn-h1-spacing']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection