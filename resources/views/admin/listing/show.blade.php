@extends('layouts.admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Listing</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Listing | <a href="{{ route('listing.index') }}">Back to All Listings</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 150px">Listing ID</th>
                                <td>{{ $listing->id }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $listing->title }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $listing->description }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="label label-{{ $listing->status==1 ? 'success' : 'warning' }}">
                                        {{ $listing->status==1 ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $listing->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $listing->updated_at }}</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <a href="{{ route('listing.edit', $listing->id) }}" class="btn btn-success btn-flat btn-sm">
                                        <i class="fa fa-edit"></i> Edit Listing
                                    </a>

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['listing.destroy', $listing->id]]) !!}
                                    {!! Form::submit('Delete Listing', ['class' => 'btn btn-danger btn-flat btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->            
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection