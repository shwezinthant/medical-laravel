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


                                   



                                   <form action="{{route('updatestore_product',$productupdate->id)}}" method="POST" enctype='multipart/form-data'>
                                            @csrf
                                           
                                            <div class="form-group">
                                            <label for="category">Category:</label>
                                            <select class="form-control" id="category" name="categoryID" onchange="showcate()">
                                                <option>Select Category</option>
                                                @foreach($all_categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                        <option value="{{$catego->id}}" selected>{{$catego->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                           <div class="form-group">
                                           <label for="usr">Name:</label>
                                           <input type="text" class="form-control" id="name" name="name" value="{{$productupdate->name}}">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Sub Name:</label>
                                           <input type="text" class="form-control" id="sub" name="sub" value="{{$productupdate->sub_name}}">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Brand Name:</label>
                                           <input type="text" class="form-control" id="brand" name="brand" value="{{$productupdate->brand_name}}">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Type:</label>
                                           <input type="text" class="form-control" id="type" name="type" value="{{$productupdate->type}}">
                                           </div>
                                          
                                          
                    
                    <div class="col-md-12 ml-5">
                        <ul class="nav nav-tabs d-inline-block">
                            <li style="float:left" class="active ml-5"><a data-toggle="tab" href="#home">Old Photo</a></li>
                            <li style="float:left" class="ml-5"><a data-toggle="tab" href="#menu1">New Photo</a></li>
                        </ul>
                    
                    </div>
                    
                      <div class="tab-content mt-2">
                        <div id="home" class="tab-pane fade-in active mb-3">
                        <img class="ml-5" src="/photo/{{$productupdate->main_photo_path}}" width="100">
                        <input type="hidden" name="oldmainphoto" value="{{$productupdate->main_photo_path}}">
                        </div>
                        <div id="menu1" class="tab-pane fade ">
                        <div class="form-group">
                        <label for="pwd">Main Photo:</label>
                        <input type="file" class="form-control" id="newmainphoto" name="newmainphoto" value="{{$productupdate->main_photo_path}}">
                        </div>
                         
                       
                      
                      
                      </div>
                    <hr>
                      <div class="form-group" id="oldsub">
                    <label for="pwd">Old Sub Photo:</label><br>
                    @foreach($subold as $suboldone)
                    <img class="ml-3" src="/photo/{{$suboldone}}" width="100">
                    @endforeach
                    
                      </div>
                      <div class="form-group">
                    <label>New Sub Photo:</label>
                    <input type="file" class="form-control" name="newimages[]" value="{{$productupdate->sub_photo_path}}" onchange="hideDIV()" id="subphoto" multiple>
                    <!-- <input type="hidden" name="oldimages[]" value="{{$productupdate->sub_photo_path}}"> -->
                    </div>                 
                                              
                                           
                                          
                                           
                                           
                                           
                                           
                                            
                                        
                                   <!-- </div> -->
                             
                           </div>
                       
                       </div>
                        
                        </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="card-body">
                           
                               
                           
                            <!-- <div class="col-xl-3 col-md-12 mb-4"> -->
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <!-- <div class="row no-gutters align-items-center"> -->
                                        
                                            
                                            <div class="form-group">
                                            <label for="usr">composation:</label>
                                            <input type="text" class="form-control" id="composation" name="composation" value="{{$productupdate->composition}}">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Medication:</label>
                                            <input type="text" class="form-control" id="medication" name="medication" value="{{$productupdate->medication}}">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Usage:</label>
                                            <input type="text" class="form-control" id="usage" name="usage" value="{{$productupdate->usage}}">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Country of Origin:</label>
                                            <input type="text" class="form-control" id="coo" name="coo" value="{{$productupdate->country_of_origin}}">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Purchase Price:</label>
                                            <input type="number" class="form-control" id="purprice" name="purprice" value="{{$productupdate->purchase_price}}">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Instock Quantity:</label>
                                            <input type="number" class="form-control" id="purprice" name="instock_qty" value="{{$productupdate->instock_qty}}">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Selling Price:</label>
                                            <input type="number" class="form-control" id="sellprice" name="sellprice" value="{{$productupdate->selling_price}}">
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
function hideDIV(){
    $('#oldsub').hide();
}
</script>
@endsection    
    


  



