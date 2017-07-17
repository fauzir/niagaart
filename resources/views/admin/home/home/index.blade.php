@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <div class="panel-body">
                        {{-- <a href="{{ url('/admin/home/create') }}" class="btn btn-success btn-sm" title="Add New Home">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}

                        {{-- {!! Form::open(['method' => 'GET', 'url' => '/admin/home', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!} --}}

                        {{-- <br/>
                        <br/> --}}
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Welcome Text</th><th>Company Description</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($home as $item)
                                    <tr>
                                        <td>{{ $item->welcome_text }}</td><td>{{ $item->company_description }}</td>
                                        <td>
                                            <a href="{{ url('/admin/home/' . $item->id) }}" title="View Home"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/home/' . $item->id . '/edit') }}" title="Edit Home"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {{-- {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/home', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Home',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!} --}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $home->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
