@extends('layouts.master')

@section('content')

 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category Section</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-4">
            <i class="fa fa-plus fa-fw"></i><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Categroy</button>
        </div>
    </div><br/>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Products List

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

 <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Categroy Details</h4>
                </div>
                <div class="modal-body">
                   <div class="row">
                        <div class="col-md-8">
                            <form role="form" action="" method="post">
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-paper-plane fa-fw"></i></span>
                                    <input type="text" class="form-control" name="" placeholder="Add New Categroy" required>
                                </div>                    
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
          </div>

@stop