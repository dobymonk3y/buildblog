@extends('main')

@section('title','| Login')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!! Form::open(['url' => '/auth/login', 'method' => 'post']) !!}

		{!! Form::label('email','Email:') !!}
		{!! Form::email('email',null,['class'=>'form-control']) !!}
		<br>

		{!! Form::label('password','Password:') !!}
		{!! Form::password('password',['class'=>'form-control']) !!}
		<br>

		{!! Form::checkbox('remember') !!}{!! Form::label('Remember Me') !!}

		{!! Form::submit('Click me to Login',['class'=>'btn btn-primary btn-block']) !!}

		<p><a href="{{ url('password/email') }}">Forgot my password</a></p>

		{!! Form::close() !!}
	</div>
</div>

@endsection