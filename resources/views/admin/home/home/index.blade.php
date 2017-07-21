@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Home Content</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/home/' . $home->id . '/edit') }}" title="Edit Home"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/home', $home->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Image </th><td> <img src="{{ asset($home->image) }}" width="20%" height="20%" alt=""> </td></tr><tr><th> Welcome Text </th><td> {{ $home->welcome_text }} </td></tr><tr><th> Company Description </th><td> {{ $home->company_description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
