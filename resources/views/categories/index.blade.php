@extends('main')

@section('title','| All Categories')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created_At</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($cates))
                    @foreach($cates as $cate)
                    <tr>
                        <td>{{$cate->id}}</td>
                        <td>{{$cate->name}}</td>
                        <td>{{$cate->created_at}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="well">
                {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
                    <h2>New Category</h2>
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
                {!! Form::submit('Create New Category',['class'=>'btn btn-primary btn-block btn-h1-spacing']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection