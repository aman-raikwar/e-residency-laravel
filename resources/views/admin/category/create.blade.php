@extends('layouts.admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New Category</h1>
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
                        <h3 class="box-title">Add New Category | <a href="{{ route('category.index') }}">Back to All Categories</a></h3>
                    </div>
                    <!-- /.box-header -->

                    {!! Form::open(['route' => 'category.store','class'=>'form-horizontal']) !!}

                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Category Name', ['for'=>'name','class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('name', null, ['id'=>'name','class' => 'form-control','maxlength'=>'50','placeholder'=>'Enter Category Name']) !!}
                                <div class="error-message">{{ ($errors->has('name')) ? $errors->first('name') : '' }}</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">    
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-2">
                                {!! Form::submit('Add New Category', ['class' => 'btn btn-info btn-flat']) !!}
                                {!! Form::reset('Reset', ['class' => 'btn btn-warning btn-flat']) !!}
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