@extends('layouts.admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Category</h1>
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
                        <h3 class="box-title">View Category | <a href="{{ route('category.index') }}">Back to All Categories</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 150px">Category ID</th>
                                <td>{{ $category->id }}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{ $category->name }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="label label-{{ $category->status==1 ? 'success' : 'warning' }}">
                                        {{ $category->status==1?'Active':'Inactive' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $category->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $category->updated_at }}</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-flat btn-sm">
                                        <i class="fa fa-edit"></i> Edit Category
                                    </a>

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $category->id]]) !!}
                                    {!! Form::submit('Delete Category', ['class' => 'btn btn-danger btn-flat btn-sm']) !!}
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