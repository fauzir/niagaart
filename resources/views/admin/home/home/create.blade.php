@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Home</div>
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

                        {!! Form::open(['url' => '/admin/home', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin/home.home.form')

                        {!! Form::close() !!}

                        {{-- <img src="{{ $image }}" id="cropimage">

                        {!! Form::open(['route' => 'crop','class' => 'form-horizontal','files'=>'true']) !!}
                          {{ Form::hidden('image', $image) }}
                          {{ Form::hidden('x', '', array('id' => 'x')) }}
                          {{ Form::hidden('y', '', array('id' => 'y')) }}
                          {{ Form::hidden('w', '', array('id' => 'w')) }}
                          {{ Form::hidden('h', '', array('id' => 'h')) }}
                          {{ Form::submit('Crop it!') }}
                          {{ Form::close() }}

                        <script type="text/javascript">
                            $(function() {
                                $('#cropimage').Jcrop({
                                    onSelect: updateCoords
                                });
                            });
                            function updateCoords(c) {
                                $('#x').val(c.x);
                                $('#y').val(c.y);
                                $('#w').val(c.w);
                                $('#h').val(c.h);
                            };
                        </script> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
