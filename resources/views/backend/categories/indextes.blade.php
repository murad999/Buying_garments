@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product Section</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
   {!! Form::open(['route' => 'categories.add','method'=>'POST']) !!}
       <div class="form-group">
        {{Form::label('category', 'categoryName')}}
        {{Form::text('categoryName','',['class'=>'form-control','placeholder'=>'Enter Your category','required'=>'','maxlength'=>100])}}
        </div> 
        {{Form::submit('Click Me!')}}
    {!! Form::close() !!}
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Product Create

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    panel body
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
           
        </div>
        <!-- /.col-lg-8 -->    
    </div>
    <!-- /.row -->
@stop