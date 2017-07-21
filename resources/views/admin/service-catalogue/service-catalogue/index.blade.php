@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Service Catalogue</div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Opening Title</th><th>Opening Text</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($servicecatalogue as $item)
                                    <tr>
                                        <td>{{ $item->opening_title }}</td><td>{{ $item->opening_text }}</td>
                                        <td>
                                            <a href="{{ url('/admin/service-catalogue/' . $item->id) }}" title="View ServiceCatalogue"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/service-catalogue/' . $item->id . '/edit') }}" title="Edit ServiceCatalogue"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/service-catalogue', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $servicecatalogue->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
