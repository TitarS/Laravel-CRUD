@extends('layout')

@section('content')
    <div class="container">
        <h3 style="text-align: center">List toys</h3>
        <div class="button" style="text-align: center">
            <a href="/create" class="btn btn-success">Create new</a>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Title</b></td>
                        <td><b>Content</b></td>
                        <td><b>Image</b></td>
                        <td><b>Actions</b></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($toys as $toy)
                    <tr>
                        <td>{!! $toy->id !!}</td>
                        <td>{!! $toy->title !!}</td>
                        <td>{!! $toy->content !!}</td>
                        <td>
                            <img src="{!! asset('uploads/' . $toy->image) !!}" alt="No picture" height="30px" class="img-circle">
                        </td>
                        <td>
                            <a href="/show/{!! $toy->id !!}"><i class="glyphicon glyphicon-eye-open"></i></a>
                            |
                            <a href="/edit/{!! $toy->id !!}"><i class="glyphicon glyphicon-edit"></i></a>
                            |
                            <a href="/delete/{!! $toy->id !!}"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $toys->links() }}
            </div>
        </div>
    </div>

@endsection