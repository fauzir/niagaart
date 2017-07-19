@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Page Content</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/contact/' . $contact->id . '/edit') }}" title="Edit Contact"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/contact', $contact->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Address </th><td> {{ $contact->address }} </td></tr><tr><th> Phone </th><td> {{ $contact->phone }} </td></tr><tr><th> Other Phone </th><td> {{ $contact->other_phone }} </td></tr><tr><th> Email </th><td> {{ $contact->email }} </td></tr><tr><th> Work Hour </th><td> {{ $contact->work_hour }} </td></tr><tr><th> Side Image </th><td> <img src="{{ $contact->side_image }}" width="20%" height="20%" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
