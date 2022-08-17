@extends('legend')

@section('title','Create Post')

@section('content')

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                             <div class="row">
                                <div class="col-md-10">
                                    <h3>Create Post</h3>
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
                                <form action="{{route('store_post')}}" method="post" enctype='multipart/form-data'>
                                    @csrf
                                <div class="form-group">
                                    
                                <label for="usr">Post Title:</label>
                                <input type="text" class="form-control" id="posttitle" name="posttitle">
                                </div>
                                <div class="form-group">
                                <label for="usr">Short Description:</label>
                                <textarea class="form-control col-13" id="short" name="short"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="usr">Long Description:</label>
                                <textarea class="form-control col-13" id="long" name="long"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="pwd">Main Photo:</label>
                                <input type="file" class="form-control" id="postmainphoto" name="postmainphoto">
                                </div>
                                <!-- <div class="form-group">
                                <label for="pwd">Sub Photo:</label>
                                <input type="file" class="form-control" name="images[]" id="subphoto" multiple>
                                </div> -->
                                <div class="form-group">
                                    
                                <label for="usr">Posted By</label>
                                <input type="text" class="form-control" id="postby" name="postby">
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