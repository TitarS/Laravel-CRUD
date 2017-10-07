@extends('layout')

@section('content')
    <div class="col-md-12">
        <div class="col-md-6" style="text-align: center">
            <h4>{!! $toy->title !!}</h4>
            <p>{!! $toy->content !!}</p>
        </div>

    </div>
    <img src="{{asset('uploads/' . $toy->image)}}" class="img-circle" width="50%">
    <a href="{{ URL::previous() }}" class="btn btn-primary col-md-offset-1">Go Back</a>
@endsection
