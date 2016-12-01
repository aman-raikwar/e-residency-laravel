@extends('layouts.admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>All Categories</h1>
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
                        <h3 class="box-title">All Categories | <a href="{{ route('category.create') }}">Add New Category</a></h3>

                        <div class="box-tools pull-right">
                            <?php $per_page_Array = array('10' => 10, '20' => 20, '50' => 50); ?>
                            <form class="form-horizontal" method="get">
                                <div class="form-group">
                                    <label class="col-sm-8 control-label">Records per Page</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="per_page" name="per_page" onchange="this.form.submit();">
                                            <?php foreach ($per_page_Array as $k => $v) { ?>
                                                <?php if ($per_page == $k) { ?>
                                                    <option value="<?php echo $k ?>" selected="selected"><?php echo $v; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $k ?>"><?php echo $v; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        @if(Session::has('message_description'))
                        <div class="alert alert-{{ Session::get('message_type') }}">
                            {{ Session::get('message_description') }}
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th style="width: 120px;" class="text-center">
                                            @if ($sort == 'id' && $sort_by == 'asc')
                                            <a href="{{ URL::current() }}?sort=id&sortby=desc">Category ID</a>
                                            @else
                                            <a href="{{ URL::current() }}?sort=id&sortby=asc">Category ID</a>
                                            @endif
                                        </th>
                                        <th>
                                            @if ($sort == 'name' && $sort_by == 'asc')
                                            <a href="{{ URL::current() }}?sort=name&sortby=desc">Category Name</a>
                                            @else
                                            <a href="{{ URL::current() }}?sort=name&sortby=asc">Category Name</a>
                                            @endif
                                        </th>
                                        <th style="width: 120px;" class="text-center">
                                            @if ($sort == 'status' && $sort_by == 'asc')
                                            <a href="{{ URL::current() }}?sort=status&sortby=desc">Status</a>
                                            @else
                                            <a href="{{ URL::current() }}?sort=status&sortby=asc">Status</a>
                                            @endif
                                        </th>
                                        <th style="width: 150px;" class="text-center">
                                            @if ($sort == 'created_at' && $sort_by == 'asc')
                                            <a href="{{ URL::current() }}?sort=created_at&sortby=desc">Created At</a>
                                            @else
                                            <a href="{{ URL::current() }}?sort=created_at&sortby=asc">Created At</a>
                                            @endif
                                        </th>
                                        <th style="width: 120px;" class="text-center sorting">Action</th>
                                    </tr>
                                </thead>
                            </table>
                            <form method="get">
                                <table class="table no-margin">
                                    <tr>
                                        <td style="width: 120px;" class="text-center"><input type="text" class="form-control" name="search_id" placeholder="Category ID" value="{{ @$_GET['search_id'] }}" /></td>
                                        <td><input type="text" class="form-control" name="search_name" placeholder="Category Name" value="{{ @$_GET['search_name'] }}" /></td>
                                        <td style="width: 120px;" class="text-center">
                                            <select class="form-control" name="search_status">
                                                <option value="">Status</option>
                                                <option value="active" {{ @$_GET['search_status']=='active' ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ @$_GET['search_status']=='inactive' ? 'selected' : '' }}>In-Active</option>
                                            </select>
                                        </td>
                                        <td style="width: 150px;" class="text-center"><input type="text" class="form-control created-datepicker" name="search_date" placeholder="Created At" value="{{ @$_GET['search_date'] }}" /></td>
                                        <td style="width: 120px;" class="text-center">
                                            <div class="btn-group">
                                                <button type="submit" name="search" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button>
                                                <a href="{{ URL::current() }}" class="btn btn-info btn-flat"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <table class="table no-margin">
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td style="width: 120px;" class="text-center">
                                            <a href="{{ route('category.show', $category->id) }}">{{ $category->id }}</a>
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td style="width: 120px;" class="text-center">
                                            <span class="label label-{{ $category->status==1 ? 'success' : 'warning' }}">
                                                {{ $category->status==1 ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td style="width: 150px;" class="text-center">{{ $category->created_at }}</td>
                                        <td style="width: 120px;" class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('category.show', $category->id) }}" class="btn btn-info btn-flat btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-flat btn-sm"><i class="fa fa-edit"></i></a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $category->id]]) !!}
                                                {!! Form::button('<i class="fa fa-trash"></i>', array('class'=>'btn btn-danger btn-flat btn-sm btnDelete','type'=>'submit')) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="total_records">You have total <b>{{ $categories->total() }}</b> records.</h4>
                            </div>
                            <div class="col-sm-6">
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-footer -->
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