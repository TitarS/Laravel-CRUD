@extends('layout')

@section('content')
    <div class="container">
        <h3 style="text-align: center">Edit</h3>
        @include('errors')
        <div class="form-group">
            <div class="col-md-12">
                <div class="form-group">
                    {{Form::open(['files' => true ])}}
                    <input type="text" name="title" class="form-control" value="{!! $toy->title !!}">
                    <br>
                    <textarea name="content" id="" rows="10" class="form-control">{!! $toy->content !!}</textarea>
                    <br>
                    <div>
                        <span class="btn btn-info btn-file">
                        <i class="icon-plus"> </i><span>Choose picture...</span>
                            {{Form::file('image', ['id' => 'image'])}}
                        </span>
                    </div>
                    <br>
                    <button class="btn btn-success">Submit</button>
                    {{Form::close()}}
                </div>
                <a href="{{ URL::previous() }}" class="btn btn-primary col-md-offset-0">Go Back</a>
            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet" type="text/css" href="{{ asset('css/my-style.css') }}" />
<script type="text/javascript" src="http://yandex.st/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>