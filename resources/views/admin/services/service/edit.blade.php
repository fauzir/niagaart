@extends('layouts.backend')

@section('head-script')
  <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Service #{{ $service->name }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/service-niagaart') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <h5>{{ $error }}</h5>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($service, [
                            'method' => 'PATCH',
                            'url' => ['/admin/service-niagaart', $service->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin/services.service.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
