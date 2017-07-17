@extends('layouts.backend')

@section('head-script')
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7lscpg0p7m2fqvhf6i5hiua3ha4nd3d9xyd7hf2qffaazouh"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Blog #{{ $blog->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/blog') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($blog, [
                            'method' => 'PATCH',
                            'url' => ['/admin/blog', $blog->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin/blog.blog.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
