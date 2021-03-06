@extends('layouts.master')

@section('content')

 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product Section</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <form action="" method="POST" accept-charset="utf-8">
      
    </form>
    <form action="{{route('categories.add')}}" method="POST" accept-charset="utf-8">
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-paper-plane fa-fw"></i></span>
            <input type="text" class="form-control" name="categoryName" placeholder="Add New Categroy" required>
        </div>                    
    <input type="submit" class="btn btn-success" value="Save">
 </form>
   {!! Form::open(['route' => 'products.add','method'=>'POST']) !!}
        {{ Form::text('email', 'example@gmail.com')}}
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
</div>
<!-- /#page-wrapper -->

@stop