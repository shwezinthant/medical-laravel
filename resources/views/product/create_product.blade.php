@extends('legend')

@section('title','Product create')

@section('content')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h3>Create Product</h3>
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


                                   



                                   <form action="{{route('storeproduct')}}" method="POST" enctype='multipart/form-data'>
                                            @csrf
                                           
                                            <div class="form-group">
                                            <label for="category">Category:</label>
                                            <select class="form-control" id="category" name="categoryID" onchange="showcate()">
                                                <option>Select Category</option>
                                                @foreach($all_categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                           <div class="form-group">
                                           <label for="usr">Name:</label>
                                           <input type="text" class="form-control" id="name" name="name">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Sub Name:</label>
                                           <input type="text" class="form-control" id="sub" name="sub">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Brand Name:</label>
                                           <input type="text" class="form-control" id="brand" name="brand">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Type:</label>
                                           <input type="text" class="form-control" id="type" name="type">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Main Photo:</label>
                                           <input type="file" class="form-control" id="mainphoto" name="mainphoto">
                                           </div>
                                           <div class="form-group">
                                           <label for="pwd">Sub Photo:</label>
                                           <input type="file" class="form-control" name="images[]" id="subphoto" multiple>
                                           </div>
                                           
                                           
                                            
                                        
                                   <!-- </div> -->
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
                                            <input type="text" class="form-control" id="composation" name="composation">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Medication:</label>
                                            <input type="text" class="form-control" id="medication" name="medication">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Usage:</label>
                                            <input type="text" class="form-control" id="usage" name="usage">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Country of Origin:</label>
                                            <input type="text" class="form-control" id="coo" name="coo">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Purchase Price:</label>
                                            <input type="number" class="form-control" id="purprice" name="purprice">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Instock Quantity:</label>
                                            <input type="number" class="form-control" id="purprice" name="instock_qty">
                                            </div>
                                            <div class="form-group">
                                            <label for="pwd">Selling Price:</label>
                                            <input type="number" class="form-control" id="sellprice" name="sellprice">
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

</script>
@endsection    
    


  



