@extends('layouts.admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Category</h1>
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
                        <h3 class="box-title">Edit Category | <a href="{{ route('category.index') }}">Back to All Categories</a></h3>
                    </div>
                    <!-- /.box-header -->

                    {!! Form::model($category, ['method' => 'PUT', 'route' => ['category.update', $category->id], 'class'=>'form-horizontal']) !!}

                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Category Name', ['for'=>'name','class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('name', null, ['id'=>'name','class' => 'form-control','maxlength'=>'50','placeholder'=>'Enter Category Name']) !!}
                                <div class="error-message">{{ ($errors->has('name')) ? $errors->first('name') : '' }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('title', 'Status', ['for'=>'status','class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('status', array('1' => 'Active', '0' => 'In-Active'), $category->status, ['class' => 'form-control','id'=>'status']); !!}
                                <div class="error-message">{{ ($errors->has('status')) ? $errors->first('status') : '' }}</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">    
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-2">
                                {!! Form::submit('Update Category', ['class' => 'btn btn-info btn-flat']) !!}
                            </div>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                    {!! Form::close() !!}
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