@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Testimony #{{ $testimony->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/testimony') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <h5>{{ $error }}</h5>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($testimony, [
                            'method' => 'PATCH',
                            'url' => ['/admin/testimony', $testimony->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin/testimony.testimony.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
