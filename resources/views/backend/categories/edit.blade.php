@extends('layouts.master')

@section('content')

 <div id="page-wrapper">
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
            <i class="fa fa-plus fa-fw"></i><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Categroy</button>
        </div>
    </div><br/>
    <div class="row">
        <div class="col-lg-8">
             <form role="form" action="{{route('categories.update',['uqid'=>$cat->uqid])}}" method="post">
                {{csrf_field()}}
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-paper-plane fa-fw"></i></span>
                    <input type="text" class="form-control" id="catName" name="categoryName" value="{{$cat->categoryName}}" required>
                </div>                    
                <button type="submit" class="btn btn-success">Save Changes</button>
            </form>
        </div>
        <!-- /.col-lg-8 -->    
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@stop

@section('customJs')

<script type="text/javascript">
    
    $('#myModaledit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_name = button.data('cat_name') 
      var cat_uid = button.data('cat_uid') 
      var modal = $(this)
      modal.find('.modal-body #catName').val(cat_name)
      modal.find('.modal-body #catUid').val(cat_uid)
    })
</script>

@stop