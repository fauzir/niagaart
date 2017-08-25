@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Service Item - {{ $serviceitem->name }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/service-item') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/service-item/' . $serviceitem->id . '/edit') }}" title="Edit ServiceItem"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/service-item', $serviceitem->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete ServiceItem',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                              <tbody>
                                  <tr><th> Image </th><td> <img src="{{ asset($serviceitem->image) }}" height="50%" alt=""> </td></tr><tr><th> Name </th><td> {{ $serviceitem->name }} </td></tr>
                                  <tr><th> Description </th><td> {{ $serviceitem->description }} </td></tr><tr><th> Detail </th><td> {!! $serviceitem->detail !!} </td></tr>
                              </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
