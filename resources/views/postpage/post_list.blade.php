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
                                <h3>Post Lists</h3>
                            </div>
                            <div calss="col-md-2">
                            <a href="{{route('create_post')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Add Post</span>
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
                                            <th>Post Title</th>
                                            <th>Short Description</th>
                                            <th>Main Photo</th>
                                            <th>Posted By</th>
                                            
                                            <th style="text-align:center">Detail</th>
                                            <th style="text-align:center">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $i=1; ?>
                                    @foreach($showposts as $post)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$post->post_title}}</td>
                                            <td>{{$post->short_description}}</td>
                                            <td><img src="/postphoto/{{$post->main_photo_path}}" width="100"></td>
                                            <td>{{$post->posted_by}}</td>
                                            
                                            
                                            <td class="text-center">
                                            <button id="print"  class="btn btn-outline-info" type="submit">
                                            <span class="float-right"><i class="fas fa-info-circle"></i>&nbsp;Detail</span>
                            </button>
                                    </td>
                                    <td style="text-overflow: ellipsis; white-space: nowrap;" class="text-center">
                                    

                                    <a href="{{route('update_post',$post->id)}}" class="btn btn-outline-secondary">
                                        <span><i class="fas fa-exclamation-triangle"></i>&nbsp;
                                    Edit</a></span>

                                    <a href="#" class="btn btn-outline-danger" onclick="deletepost('{{$post->id}}')">
                                        <i class="fas fa-trash"></i>&nbsp;
                                        Delete
                                    </a>
                                </td>

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
  function deletepost(value){
var postid = value;
    swal({
    title: "Are You Sure Want To Delete?",
    icon:'warning',
    buttons: ["NO", "YES"]
})

.then((isConfirm)=>{

if(isConfirm){

  $.ajax({
      type:'POST',
        url:'delete_post',
        dataType:'json',
        data:{ 
          "_token": "{{ csrf_token() }}",
          "post_id": postid,
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