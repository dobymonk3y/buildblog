@extends('main')

@section('title','|  Contact')

@section('content')
    <!-- start of header-->
    <div class="row">
        <div class="col-md-12">
            {{--<div class="jumbotron">--}}
            <div class="col-md-8 col-md-offset-2">
                <h1>Conatact Me </h1>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control"  type="text">
                    </div>
                    <div class="form-group">
                        <label name="email">Subject:</label>
                        <input id="subject" name="subject" class="form-control"  type="text">
                    </div>
                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control"  type="text">Type your message in here pls ...</textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Send Message">
                </form>
            </div>
        </div>
    </div>
@endsection