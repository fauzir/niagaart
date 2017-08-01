@extends('layouts.backend')

@section('head-script')
  {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7lscpg0p7m2fqvhf6i5hiua3ha4nd3d9xyd7hf2qffaazouh"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <script>
    tinymce.init({
        selector: "textarea",  // change this value according to your HTML
        plugins: "image",
        menubar: "insert",
        toolbar: "image"
    });
  </script> --}}
  <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Blog</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/blog-post') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/blog-post', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin/blog.blog.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace( 'contenteditor' );
    </script>
@endsection
