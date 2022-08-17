@extends('legend')

@section('title','Category Lists')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h3>Product Lists</h3>
                            </div>
                            <div calss="col-md-2">
                            <a href="{{route('create_category')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Add Category</span>
                                    </a>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Main Photo</th>
                                            <th class="text-center">Description</th>
                                            
                                            <th style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $i=1; ?>
                                    @foreach($showcategory as $cate)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$cate->name}}</td>
                                            
                                          <td>
                                            <img src="/photo/{{$cate->photo}}" width="100">

   
 </td>
 <td>{{$cate->description}}</td>
                                            
                                
                                    <td class="text-center">
                                    

                                    <a href="{{route('update_category',$cate->id)}}" class="btn btn-outline-secondary">
                                        <span><i class="fas fa-exclamation-triangle"></i>&nbsp;
                                    Edit</a></span>

                                    <button class="btn btn-outline-danger" onclick="deletecate('{{$cate->id}}')">
                                        <i class="fas fa-trash"></i>&nbsp;
                                        Delete
                                    </button>
                                </td>
</form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

@endsection
@section('js')
<script>
  function deletecate(value){

var cate_id = value;

swal({
    title: "Are You Sure Want To Delete?",
    icon:'warning',
    buttons: ["NO", "YES"]
})

.then((isConfirm)=>{

if(isConfirm){

  $.ajax({
      type:'POST',
        url:'deletecate',
        dataType:'json',
        data:{ 
          "_token": "{{ csrf_token() }}",
          "cate_id": cate_id,
        },

      success: function(){
              
              swal({
                    title: "Success!",
                    text : "Successfully Deleted!",
                    icon : "success",
                });

                setTimeout(function(){
       window.location.reload();
    }, 1000);

                
            },            
        });
}
});


}
</script>


@endsection