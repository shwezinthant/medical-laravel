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


                                   



                                   <form action="{{route('storeupdate_category',$oldcate->id)}}" method="POST" enctype='multipart/form-data'>
                                            @csrf
                                            <div class="form-group">
                                           <label for="usr">Category Name:</label>
                                           <input type="text" class="form-control" id="title" name="name" value="{{$oldcate->name}}">
                                           </div>
                                           
                                           <div class="form-group">
                                           <label for="pwd">Description:</label>
                                           <textarea class="form-control" id="long" name="long" rows="4" cols="50">{{$oldcate->description}}</textarea>
                                           </div>
                                      
                                           <div class="form-group" id="oldmain">
                                            <label for="pwd">Old Photo:</label><br>
                                           
                                            <img class="ml-3" src="/photo/{{$oldcate->photo}}" width="100">
                                            <input type="hidden" name="oldmainphoto" value="{{$oldcate->photo}}">
                                            
                                            </div>
                                            <div class="form-group">
                                            <label>New Photo:</label>
                                            <input type="file" class="form-control" name="newphoto" onchange="hideoldcate()" id="newphoto">
                                            
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
function hideoldcate(){
    $('#oldmain').hide();
}
</script>
@endsection    
    


  



