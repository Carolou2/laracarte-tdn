@extends('layouts.default', ['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service, please <a href="krolkamdoum@gmail.com">ask for help</a>.</p>
                <form action="{{route('contact_path')}}" method="POST" >
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('name') ? 'has-error': ''}}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" required="required">
                        {!! $errors->first('name','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('email') ? 'has-error': ''}} ">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}"required="required">
                        {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group {{$errors->has('message') ? 'has-error': ''}}">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control"  cols="10" rows="10"required="required" >{{old('message')}}</textarea>
                        {!! $errors->first('message','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit Enquiry &raquo; </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop