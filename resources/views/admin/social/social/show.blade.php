@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body"><a href="{{ url('/admin/social/' . $social->id . '/edit') }}" title="Edit Social"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/social', $social->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Facebook </th><td> {{ $social->facebook }} </td></tr>
                                    <tr><th> Twitter </th><td> {{ $social->twitter }} </td></tr>
                                    <tr><th> Linkedin </th><td> {{ $social->linkedin }} </td></tr>
                                    <tr><th> Instagram </th><td> {{ $social->instagram }} </td></tr>
                                    <tr><th> Skype </th><td> {{ $social->skype }} </td></tr>
                                    <tr><th> YouTube </th><td> {{ $social->youtube }} </td></tr>
                                    <tr><th> Google+ </th><td> {{ $social->google }} </td></tr>
                                    <tr><th> Pinterest </th><td> {{ $social->pinterest }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
