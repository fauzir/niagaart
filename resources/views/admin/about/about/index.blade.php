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
                                    <tr><th> Image </th><td> <img src="{{ asset($about->opening_image) }}" height="50%" alt=""> </td></tr><tr><th> Opening Text </th><td> {{ $about->opening_text }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
