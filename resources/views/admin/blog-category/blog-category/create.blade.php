@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Blog Category</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/blog-category') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/blog-category', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin/blog-category.blog-category.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
