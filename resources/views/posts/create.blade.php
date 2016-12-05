@extends('main')

@section('title','|  Create New Post')

@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {{--这里的数组键值对表示访问那个路由别名   php artisan route:list  查看--}}
            {{--{!! Form::open(array('routes' => 'posts.store','data-parsley-validate' => '')) !!}--}}
            {!! Form::open(array('action' => 'PostController@store','data-parsley-validate' => '')) !!}
                {!!  Form::label("title","Title:") !!}
                {{--{{Form::text("title",null,array('class' => 'form-control'))}}--}}
                {{-- Maxlength 限制最大输入长度 --}}
                {!!  Form::text("title",null,array('class' => 'form-control','required' =>'','Maxlength '=>'255','placeholder' =>'请输入标题, 长度不超过255字符')) !!}
                {!!  Form::label("slug","Slug:") !!}

                {!! Form::label('category_id','Category:') !!}
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

                {!! Form::label('slug','Slug:') !!}
                {!!  Form::text("slug",null,array('class' => 'form-control','required' =>'','Minlength '=>'5','Maxlength '=>'10','placeholder' =>'请输入标签, 长度5-10个字符')) !!}
                {!!  Form::label("body","Post Body:") !!}

                {!!  Form::textarea("body",null,array('class' => 'form-control','required' =>'')) !!}
                {!!  Form::submit("Creat Post",array('class' => 'btn btn-lg btn-success btn-block','style' => "margin-top:20px")) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection
