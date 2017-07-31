@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Home #{{ $home_en->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/home') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="col-md-12">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">English</a></li>
                            <li><a href="#tab2" data-toggle="tab">Indonesia</a></li>
                          </ul>

                          <br>
                        </div>

                        <div class="tab-content">
                          <div class="tab-pane active" id="tab1">
                            {!! Form::model($home_en, [
                                'method' => 'PATCH',
                                'url' => ['/admin/home', $home_en->id],
                                'class' => 'form-horizontal',
                                'id' => 'form_en',
                                'files' => true
                            ]) !!}

                            @include ('admin/home.home.form', ['submitButtonText' => 'Update'])

                            {!! Form::close() !!}
                              </div>
                              <div class="tab-pane" id="tab2">
                                {!! Form::model($home_id, [
                                    'method' => 'PATCH',
                                    'url' => ['/admin/home', $home_id->id],
                                    'class' => 'form-horizontal',
                                    'id' => 'form_id',
                                    'files' => true
                                ]) !!}

                                @include ('admin/home.home.form', ['submitButtonText' => 'Update'])

                                {!! Form::close() !!}
                          </div>
                      </div>
                        {{-- <input type="button" value="Update" onclick="submitForms()" /> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    submitForms = function(){
      function myFunction() {
      setTimeout(function(){ document.getElementById("form_en").submit();}, 3000);
      setTimeout(function(){ document.getElementById("form_id").submit();}, 6000);
      }
    }
    </script>
@endsection
