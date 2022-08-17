@extends('legend')

@section('title','Product Lists')

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
                            <a href="{{route('create_product')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Add Product</span>
                                    </a>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Sub Name</th>
                                            <th>Brand</th>
                                            <th>Type</th>
                                            <th>Main Photo</th>
                                            <th>Detail</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $i=1; ?>
                                    @foreach($showproduct as $product)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->sub_name}}</td>
                                            <td>{{$product->brand_name}}</td>
                                            <td>{{$product->type}}</td>
                                            <td> 
                                          
                                            <img src="/photo/{{$product->main_photo_path}}" width="100">

   
 </td>
                                            
                                            <td class="text-center">
                                            <button id="print"  class="btn btn-outline-info" type="submit">
                                            <span class="float-right"><i class="fas fa-info-circle"></i>&nbsp;Detail</span>
                            </button>
                                    </td>
                                    <td style="text-overflow: ellipsis; white-space: nowrap;" class="text-center">
                                    

                                    <a href="{{route('update_product',$product->id)}}" class="btn btn-outline-secondary">
                                        <span><i class="fas fa-exclamation-triangle"></i>&nbsp;
                                    Edit</a></span>

                                    <button class="btn btn-outline-danger" onclick="deleteproduct('{{$product->id}}')">
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
  function deleteproduct(value){

var product_id = value;

swal({
    title: "Are You Sure Want To Delete?",
    icon:'warning',
    buttons: ["NO", "YES"]
})

.then((isConfirm)=>{

if(isConfirm){

  $.ajax({
      type:'POST',
        url:'deleteproduct',
        dataType:'json',
        data:{ 
          "_token": "{{ csrf_token() }}",
          "product_id": product_id,
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
