@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Service - {{ $service->name }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/service-niagaart') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/service-niagaart/' . $service->id . '/edit') }}" title="Edit Service"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/service-niagaart', $service->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Service',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Banner Image </th><td> <img src="{{ $service->banner_image }}" height="20%" alt=""> </td><tr><th> Image </th><td> <img src="{{ $service->image }}" height="50%" alt=""> </td></tr><tr><th> Name </th><td> {{ $service->name }} </td></tr><tr><th> Description </th><td> {{ $service->description }} </td></tr>
                                    <tr><th> Type </th><td> {{ $service->type }} </td></tr><tr><th> Publish </th><td> {{ $service->publish }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
