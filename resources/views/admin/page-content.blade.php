@extends('layouts.backend')

@section('content')
  <div class="container">
      <div class="row">

          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">HOME <a class="pull-right" href="{{ url('/admin/home/' . $home->id . '/edit') }}" title="Edit Home"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    {!! Form::open([
                        'method'=>'DELETE',
                        'url' => ['admin/home', $home->id],
                        'style' => 'display:inline'
                    ]) !!}
                    {!! Form::close() !!}
                </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-borderless">
                              <tbody>
                                  <tr><th> Welcome Text </th><td> {{ $home->welcome_text }} </td></tr><tr><th> Company Description </th><td> {{ $home->company_description }} </td></tr>
                              </tbody>
                          </table>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="row">

          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">ABOUT <a class="pull-right" href="{{ url('/admin/about/' . $about->id . '/edit') }}" title="Edit About"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                  {!! Form::open([
                      'method'=>'DELETE',
                      'url' => ['admin/about', $about->id],
                      'style' => 'display:inline'
                  ]) !!}
                  {!! Form::close() !!}
                </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-borderless">
                              <tbody>
                                  <tr><th> Image </th><td> <img src="{{ asset($about->opening_image) }}" height="50%" alt=""> </td></tr><tr><th> Opening Text </th><td> {{ $about->opening_text }} </td></tr>
                              </tbody>
                          </table>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="row">

          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">CONTACT <a class="pull-right" href="{{ url('/admin/contact/' . $contact->id . '/edit') }}" title="Edit Contact"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                  {!! Form::open([
                      'method'=>'DELETE',
                      'url' => ['admin/contact', $contact->id],
                      'style' => 'display:inline'
                  ]) !!}
                  {!! Form::close() !!}
                </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-borderless">
                              <tbody>
                                  <tr><th> Address </th><td> {{ $contact->address }} </td></tr><tr><th> Phone </th><td> {{ $contact->phone }} </td></tr><tr><th> Other Phone </th><td> {{ $contact->other_phone }} </td></tr><tr><th> Email </th><td> {{ $contact->email }} </td></tr><tr><th> Work Hour </th><td> {{ $contact->work_hour }} </td></tr>
                              </tbody>
                          </table>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="row">

          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">SERVICE CATALOGUE <a class="pull-right" href="{{ url('/admin/service-catalogue/' . $servicecatalogue->id . '/edit') }}" title="Edit ServiceCatalogue"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                  {!! Form::open([
                      'method'=>'DELETE',
                      'url' => ['admin/servicecatalogue', $servicecatalogue->id],
                      'style' => 'display:inline'
                  ]) !!}
                  {!! Form::close() !!}
                </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr><th> Opening Title </th><td> {{ $servicecatalogue->opening_title }} </td></tr><tr><th> Opening Text </th><td> {{ $servicecatalogue->opening_text }} </td></tr>
                            </tbody>
                        </table>
                    </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
