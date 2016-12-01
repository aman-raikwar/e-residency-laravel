@extends('layouts.admin.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New Listing</h1>
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
                        <h3 class="box-title">Add New Listing | <a href="{{ route('listing.index') }}">Back to All Listings</a></h3>
                    </div>
                    <!-- /.box-header -->

                    {!! Form::open(['route' => 'listing.store','class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}

                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Title', ['for'=>'title','class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title', null, ['id'=>'title', 'class' => 'form-control', 'maxlength'=>'100', 'placeholder'=>'Enter Title']) !!}
                                <div class="error-message">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('description', 'Description', ['for'=>'description','class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textArea('description', null, ['id'=>'description', 'class' => 'form-control', 'maxlength'=>'1000', 'placeholder'=>'Enter Description']) !!}
                                <div class="error-message">{{ ($errors->has('description')) ? $errors->first('description') : '' }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('picture', 'Featuured Image', ['for'=>'picture','class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                <p><img src="http://placehold.it/200/200" class="display-picture" alt="Featured Image" /></p>
                                {!! Form::file('picture', ['id'=>'picture', 'class' => 'input-picture']) !!}
                                <div class="error-message">{{ ($errors->has('picture')) ? $errors->first('picture') : '' }}</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /.box-body -->
                    <div class="box-footer">    
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-2">
                                {!! Form::submit('Add New Listing', ['class' => 'btn btn-info btn-flat']) !!}
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