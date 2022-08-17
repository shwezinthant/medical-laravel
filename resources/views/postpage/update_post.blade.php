@extends('legend')

@section('title','Product Update')

@section('content')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h3>Update Product</h3>
                            </div>
                            <div calss="col-md-2">
                            
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="card-body">
                        
                               
                           
                           <!-- <div class="col-xl-3 col-md-12 mb-4"> -->
                           <div class="card border-left-success shadow h-100 py-2">
                               <div class="card-body">
                                   <!-- <div class="row no-gutters align-items-center"> -->


                                   



                                   <form action="{{route('storeupdate_post',$oldpost->id)}}" method="POST" enctype='multipart/form-data'>
                                            @csrf
                                            <div class="form-group">
                                           <label for="usr">Post Title:</label>
                                           <input type="text" class="form-control" id="title" name="title" value="{{$oldpost->post_title}}">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Short Description:</label>
                                           <textarea class="form-control" id="short" name="short">{{$oldpost->short_description}}</textarea>
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Long Description:</label>
                                           <textarea class="form-control" id="long" name="long" rows="4" cols="50">{{$oldpost->long_description}}</textarea>
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Posted By:</label>
                                           <input type="text" class="form-control" id="postby" name="postby" value="{{$oldpost->posted_by}}">
                                           </div>
                                           <div class="form-group" id="oldmain">
                                            <label for="pwd">Old Photo:</label><br>
                                           
                                            <img class="ml-3" src="/postphoto/{{$oldpost->main_photo_path}}" width="100">
                                            <input type="hidden" name="oldmainphoto" value="{{$oldpost->main_photo_path}}">
                                            
                                            </div>
                                            <div class="form-group">
                                            <label>New Photo:</label>
                                            <input type="file" class="form-control" name="newphoto" onchange="hideold()" id="newphoto">
                                            
                                            </div>    
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-block"><i class="fas fa-check"></i>
                                             Submit</button>
                                            </div>
                                          
                                          
                    
                  
                
                    
                                    <!-- </div> -->
                                </div>
                            </div>
</form>
                        </div>
</div>
</div>
                    
@endsection


@section('js')
<script>
function hideold(){
    $('#oldmain').hide();
}
</script>
@endsection    
    


  



