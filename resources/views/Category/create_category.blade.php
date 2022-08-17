@extends('legend')

@section('title','Create Category')

@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h3>Create Category</h3>
                            </div>
                            <div calss="col-md-2">
                            
                            </div>
                        </div>
                        </div>
                <div class="container-fluid">

                    
                    
                   

                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                        <form action="{{route('store_category')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                        <div class="form-group">
                                            
                                           <label for="usr">Name:</label>
                                           <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group">
                                           <label for="catphoto">Photo:</label>
                                           <input type="file" class="form-control" id="catphoto" name="catphoto">
                                        </div>
                                        <div class="form-group">
                                           <label for="usr">Description:</label>
                                           <textarea class="form-control" id="description" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-block"><i class="fas fa-check"></i>
                                        Submit</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>
                               
                           

                                
                           

  
                        
    
    
 @endsection