
@extends('../master')

@section('content')
    

    <!-- ======= Slider Section ======= -->
   <h1 class="pt-3 mt-3"></h1>
    <input type="hidden" value="{{$strid}}" id="allid">
    <input type="hidden" value="{{$strcomid}}" id="allcomid">
    <!-- ======= Footer ======= -->
    <div class="container-fluid mainbody">
        <div class="container pt-2">
          <div class="row mt-5 pb-2">
           
              @forelse($posts as $postone)
              
            <div class="col-md-6 glance">
                <div id="post" class="card shadow mb-4 mt-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{$postone->post_title}}</h6>
                        
                        <i class="fa fa-clock-o text-info">
                        <small>    
                        <?=$postone->created_at->format("H");?>&nbsp;hours
                          
                        </small>
                        </i> <br> 
                        <i class="fa fa-calendar text-info">
                       <small>
                        <?= $postone->created_at->toDateString();?>
                        </small>   
                        </i>
                            
                            
                            
                        
                       
                        
                    </div>
                    <div class="card-body">
                        <h6>{{$postone->short_description}}</h6>
                        
                        
                        <hr>
                        
                        <div class="row">
                            
                      <!-- <input type="text" value="{{$postone->sub_photo_path}}" id="suB"> -->
                      <img src="/postphoto/{{$postone->main_photo_path}}" width="500">
                         
                        </div>
                        
                        <p class="mt-2">{{$postone->long_description}}</p>
                    </div>
                    <div class="card-footer">
                    <div id="space{{$postone->id}}" class="space">
                    
                            <span class="text-primary">
                                <!--comment card-->
                                <!--end comment card-->
                                        @foreach($comments as $commen)
                                       
                                        @if($postone->id == $commen->post_id)
                                      
                                        #<span class="bg-light text-dark"><i><b>&nbsp;&nbsp;&nbsp;{{$commen->name}}&nbsp;&nbsp;&nbsp;</b></i></span>#<br>
                                        <div class="card-body">
                                        {{$commen->comment_description}}
                                        </div>
                                        <br>
                                        <div id="respace{{$commen->id}}" class="ml-5 respace">
                                        @foreach($replies as $reps)
                                        @if($commen->id == $reps->comment_id)
                                        <div class="card bg-secondary text-light">
                                       <span class="">&nbsp;{{$reps->reply_description}}&nbsp;&nbsp;&nbsp;<span class="text-info">By Admin</span></span>
                                       
                                        </div>
                                        @endif
                                        @endforeach
                                        </div>
                                        <div id="SHOW{{$commen->id}}">

                                        <a id="showreply" class="float-right ml-3" onclick="showreply('{{$commen->id}}')"> 
                                        Show Reply
                                        </a>
                                        @if (auth()->check())
                                        <a href="#" id="reply" class="float-right" data-toggle="modal" data-target="#reply{{$commen->id}}"> 
                                            Reply
                                            </a>
                                        @endif
                                       
                                        </div>
                                       <hr class="stra">
                                        @endif
                                        
                                        @endforeach
                                     
                            </span>
                    </div>
                        <div id="{{$postone->id}}">
                             
                            
                        </div> 
                            <button  class="btn btn-outline-info" id="comb{{$postone->id}}" onclick="showcomment('{{$postone->id}}')">
                            <i class="fa fa-comments-o">
                            <span class="text">Comment</span>
                            </i>
                            </button>
                    </div>     
                </div><!-- card shadow end  -->  
                           
            </div><!-- glance end -->     
            <!--Comment User Information Modal -->
<div class="form-group text-info">
                        
                        <form action="{{route('store_comment')}}" method="post">
                        @csrf
                        <input type="hidden"  name="postID" value="{{$postone->id}}">
                        <input type="hidden" id="comde{{$postone->id}}" name="comment_des">
                        <div class="modal fade" id="add_item{{$postone->id}}" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title text-info">User Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="#close_modal">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                    
                                        
                                        <label>Name:</label>
			                            <input class="form-control" type="text" placeholder="Your Name" id="name" name="uname">
                                        <label>Phone Number:</label>
			                            <input class="form-control" type="number" placeholder="Your Phone No" id="phno" name="phno">
                                        <label>Email:</label>
			                            <input class="form-control" type="text" placeholder="Your Email" id="email" name="email">

                                        

                                        <div class="form-actions mt-3">
                                          <button type="submit" class="btn btn-success" id="add"> <i class="fa fa-check"></i>Submit</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                        </div> 
                    </div>
                </form>
<!-- end modal    -->
         

             @empty
            <p>
                No post Found
            </p>
            @endforelse
        </div><!--row end end-->             
                                
                    
          
          
          

          
            
        </div>
    </div>
    

<!--Reply Admin Modal-->
@foreach($comments as $cmt)
<div class="form-group text-info">
                                        <form action="{{route('store_reply')}}" method="post">
                        @csrf
                        
                        
                        <div class="modal fade" id="reply{{$cmt->id}}" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title text-info">Reply for Comment</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="#close_modal">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                    
                                        
                                        
			                            
                                        <label>Reply Description:</label>
                                        <input type="hidden" name="CID" id="CID" value="{{$cmt->id}}">
			                            <textarea class="form-control col-md-10" type="text" placeholder="Your Reply Description" id="reply" name="reply"></textarea>

                                        

                                        <div class="form-actions mt-3">
                                          <button type="submit" class="btn btn-success" id="add"> <i class="fa fa-check"></i>Submit</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                        </div> 
                    </div>
                </form>
</div>
@endforeach
<!--end reply modal-->
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('nav li').removeClass('active');
        $('.blog-active').addClass('active');
        // var allcomid = $('#allcomid').val();
        // alert(allcomid);
        
    
        // alert(allcomid[0]+allcomid[1]+allcomid[2]);
        // if(allcomid[3] == ","){
        //     alert("hehe");
        // }else{
        //     alert("halhal");
        // }
        
        // var lencomstr = allcomid.length;
        // var j=1;
        // var k=2;
        // for (j,k;j<=150,k<=150;j+=3,k+=3){
        //     $('#respace'+allcomid[j]+allcomid[k]).hide();
        // }
          $('.respace').hide();  
      
        var allid = $('#allid').val();
        var lenstr = allid.length;
        // alert(lenstr);
        // alert(allid[0]+allid[2]);
        var i=1;
        // for(i;i<=lenstr;i+=2){
           
           
        //     $('#space'+allid[i]).hide();
        // }
        $('.space').hide();
        
    
    });
        function showcomment(value){
            $('#space'+value).show();
            var ID = value;
            $('#comb'+value).hide();
           var html = "";
           html +=`<p></p><br>
           <div class="form-group bg-info text-white">
           <label class="ml-3 mt-3 mb-3"><b>Your Comment</b></label>&nbsp;&nbsp;&nbsp;<input type="text" class="col-md-7" id="com_d`+value+`" onchange="enterrr(`+value+`)">
           <span id="mob`+value+`"></span>
           </div>
           `
           $("#"+value).append(html);
        }
        function enterrr(value){
          
           
            var description = $('#com_d'+value).val();
            // alert(description);
            $('#comde'+value).val(description);
            var html ="";
            html += `<button type="button" id="appear" class="btn btn-dark" data-toggle="modal" data-target="#add_item`+value+`"> 
                                <i class="fa fa-plus"></i>
                            </button>`
            $('#mob'+value).append(html);
            
        }
    
        // function storecomment(value){
        //     // alert(value);
        //     var name = $('#name'+value).val();
        //     var ph = $('#phno'+value).val();
        //     var email = $('#email'+value).val();
        //     var descri = $('#comde'+value).val();
        //     alert(name+ph+email+descri);
        //     $.ajax({
        //   type:'POST',
        //     url:'postui/storecomment',
        //     dataType:'json',
        //     data:{ 
        //       "_token": "{{ csrf_token() }}",
        //       "postid": value,
        //       "name" : name,
        //       "phone":ph,
        //       "email" : email,
        //       "dept" : descri,
    
        //     },
        //     success: function(data){
                
        //         alert("hello");
        //         window.location.reload();
        //               },            
        //     });
        // }
    
    // function ApproveLeave(value){
    
    // var unit_id = value;
    
    // swal({
    //     title: "Are You Sure Want To Delete?",
    //     icon:'warning',
    //     buttons: ["NO", "YES"]
    // })
    
    // .then((isConfirm)=>{
    
    // if(isConfirm){
    
    //   $.ajax({
    //       type:'POST',
    //         url:'delete',
    //         dataType:'json',
    //         data:{ 
    //           "_token": "{{ csrf_token() }}",
    //           "unit_id": unit_id,
    //         },
    
    //       success: function(){
                  
    //               swal({
    //                     title: "Success!",
    //                     text : "Successfully Deleted!",
    //                     icon : "success",
    //                 });
    
    //                 setTimeout(function(){
    //        window.location.reload();
    //     }, 1000);
    
                    
    //             },            
    //         });
    // }
    // });
    
    
    //  }
    // function carryid(value){
    //     // alert(value);
    //     $('#CID').val(value);
    // }
    function showreply(value)
    {
        $('#respace'+value).show();
       
    }
    </script>
@endsection
