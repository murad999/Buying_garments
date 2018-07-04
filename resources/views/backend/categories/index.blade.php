@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category Section</h1>
        </div>
        <!-- /.col-lg-12 -->
            @if(count($errors)>0)
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item text-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
    </div>
    <div class="row">
        <div class="col-md-4">
            <i class="fa fa-plus fa-fw"></i><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaladd">Add New Category</button>
            
                {{-- {!! Form::open(['route' => 'products.add','method'=>'POST']) !!}
                    {{ Form::text('email', 'example@gmail.com')}}
                    {{Form::submit('Click Me!')}}
                {!! Form::close() !!} --}}
        </div>
    </div><br/>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Categroy List

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                                        <table class="table table-hover">
                        <caption>This all of Categroy</caption>
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th colspan="3" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)  
                            <tr>
                                
                                <td>{{$category->categoryName}}</td>

                                @if($category->status == 1)
                                    <td>Active</td> 
                                @else
                                    <td>Deactive</td>
                                @endif 
                                
                                <td><button type="button" class="btn btn-info btn-xs" data-cat_name="{{$category->categoryName}}" data-cat_id="{{$category->id}}" data-toggle="modal" data-target="#myModaledit">Edit</button>
                                    {{-- <a href="{{route('categories.edit',['id'=>$category->id])}}" class="btn btn-success btn-xs">Edit</a> --}}
                                </td> 
                                <td>
                                     <button type="submit" id="warning" data-toggle="modal"  data-target="#myModaldelete" data-cat_id="{{$category->id}}" class="btn btn-danger btn-xs" >Delete</button>
                                    {{-- <form action="{{route('categories.destroy',['id'=>$category->id])}}" method="post">
                                        
                                        {{csrf_field()}}

                                        {{method_field('DELETE')}}

                                        <button type="submit" id="warning" class="btn btn-danger btn-xs" >Delete</button>
                                    </form> --}}
                                    
                                </td>   
                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>

                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
           
        </div>
        <!-- /.col-lg-8 -->    
    </div>
    <!-- /.row -->



<!-- Modal -->
          <div class="modal fade" id="myModaladd" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Product Details</h4>
                </div>
                <div class="modal-body">
                   <div class="row">
                        <div class="col-md-8">
{{-- 
                               {!! Form::open(['route' => 'products.add','method'=>'POST']) !!}
                                    {{ Form::text('email', 'example@gmail.com')}}
                                    {{Form::submit('Click Me!')}}
                                {!! Form::close() !!} --}}
                                <form action="" method="POST" accept-charset="utf-8">
                                  
                                  {{-- <input type="text" name=""> --}}
                                </form>
                            <form name="addform" action="{{route('categories.store')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-paper-plane fa-fw"></i></span>
                                    <input type="text" class="form-control" name="categoryName" placeholder="Add New Product" required>
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

 <!-- Modal edit-->
          <div class="modal fade" id="myModaledit" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Categroy</h4>
                </div>
                <div class="modal-body">
                   <div class="row">
                        <div class="col-md-8">
                            <form role="form" action="{{route('categories.update')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-paper-plane fa-fw"></i></span>
                                    <input type="hidden" id="catUid" value="" name="cid">
                                    <input type="text" class="form-control" id="catName" name="categoryName" required>
                                </div>                    
                                <button type="submit" class="btn btn-success">Save Changes</button>
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

 <!-- Modal delete-->
<div id="myModaldelete" class="modal fade" style="display: none;">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">         
                <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
                <div class="row">
                        <div class="col-md-8">
                          <form action="" method="POST" accept-charset="utf-8">
                            
                            <input type="text" name="">
                          </form>
                            <form role="form" action="{{route('categories.destroy')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group input-group">
                                    <input type="hidden" id="catUid" value="" name="cid">
                                </div>                    
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
            </div>
        </div>
    </div>
</div>


</div>

@stop



@section('customJs')

<script type="text/javascript">
    $('#myModaladd').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      // var cat_name = button.data('cat_name') 
      // var cat_id = button.data('cat_id') 
      var modal = $(this)
      // modal.find('.modal-body #catName').val(cat_name)
      // modal.find('.modal-body #catUid').val(cat_id)
    })

    $('#myModaledit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_name = button.data('cat_name') 
      var cat_id = button.data('cat_id') 
      var modal = $(this)
      modal.find('.modal-body #catName').val(cat_name)
      modal.find('.modal-body #catUid').val(cat_id)
    })

    $('#myModaldelete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('cat_id') 
      var modal = $(this)
      modal.find('.modal-body #catUid').val(cat_id)
    })


</script>

@stop