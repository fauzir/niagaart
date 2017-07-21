@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">About Content</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/about/' . $about->id . '/edit') }}" title="Edit About"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/about', $about->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Image Header </th><td> <img src="{{ asset($about->image_header) }}" width="20%" height="20%" alt=""> </td></tr><tr><th> Opening Image </th><td> <img src="{{ $about->opening_image }}" width="20%" height="20%" alt=""> </td></tr><tr><th> Opening Title </th><td> {{ $about->opening_title }} </td></tr><tr><th> Opening Text </th><td> {{ $about->opening_text }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
