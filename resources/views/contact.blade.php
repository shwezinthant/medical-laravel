@extends('master')
@section('style')
    
<style>
    #header {
        background: rgb(0 0 0 / 0%) !important;
    }

    #header.header-scrolled {
        background: rgba(0, 0, 0, 0.8) !important;
        height: 60px;
        padding: 10px 0;
    }

</style>

@endsection
@section('content')

    <div class="container-fluid product-section-one">
        
        <div class="container pt-5">
            <div class="row py-5">
                <div class="col-md-6 mt-5">
                  
                
                        <div class="row">
                              <div class="col-md-12 contactus-header">
                                    <h2 class="text-center">CONTACT US</h2>
                                </div>
                            <div class="col-md-6">
                              
                                <div class="form-group contactus-name">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter name" name="name" id="name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            
                            </div>
                            <div class="col-md-6">
                                <div class="form-group contactus-name">
                                    <label for="email">Email Or Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter email or phone" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group contactus-name">
                                    <label for="message">Message</label><br>
                                    <textarea name="message" id="message" class="form-control" placeholder="Message here" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 sendMailbtn" >Submit</button>

                        <div class="row mailsuccess">

                        </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="col-md-12 contactus-header pb-3">
                        <h2 class="text-center">LOCATION IN MAP</h2>
                    </div>
                    <ul class="nav nav-tabs ">
                        <li class="active ml-5"><a data-toggle="tab" href="#home">Yangon</a></li>
                        <li class="ml-5"><a data-toggle="tab" href="#menu1">Mandalay</a></li>
                        <li class="ml-5"><a data-toggle="tab" href="#menu2">Taunggyi</a></li>
                      </ul>
                    
                      <div class="tab-content mt-3">
                        <div id="home" class="tab-pane fade-in active embed-responsive embed-responsive-4by3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.0510412135122!2d96.16790881436494!3d16.774136024617462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed812e066ca7%3A0x42737caa24c7f7af!2sSeven%20Diamond%20General%20Trading%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1606054440680!5m2!1sen!2smm" width="370" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        
                        </div>
                        <div id="menu1" class="tab-pane fade embed-responsive embed-responsive-4by3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.0510412135122!2d96.16790881436494!3d16.774136024617462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed812e066ca7%3A0x42737caa24c7f7af!2sSeven%20Diamond%20General%20Trading%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1606054440680!5m2!1sen!2smm" width="370" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                         
                        </div>
                        <div id="menu2" class="tab-pane fade embed-responsive embed-responsive-4by3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.0510412135122!2d96.16790881436494!3d16.774136024617462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed812e066ca7%3A0x42737caa24c7f7af!2sSeven%20Diamond%20General%20Trading%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1606054440680!5m2!1sen!2smm" width="370" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                      
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
$('nav li').removeClass('active');
$('.contact-active').addClass('active');


});
$('.sendMailbtn').click(function(event){
    event.preventDefault();


var name = $('#name').val();;

var email = $("#email").val();

var message = $("#message").val();

 $.ajax({

   type:'POST',

   url:'/send-mail',
   
   data:{
    "_token":"{{csrf_token()}}",
    "name":name,
    "email":email,
    "message":message,
    
   },

    success:function(data){
        var nullhtml=``;
        var successhtml= `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thanks!</strong> Your from is send to <strong>Seven-Diamond-General-Trading-CoLtd-</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
        `;
        var failhtml= `
        <div class="alert alert-dager alert-dismissible fade show" role="alert">
                        <strong>Something Wrong!</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
        `;
        if(data.status==1){
            $('.mailsuccess').html(successhtml);
            $('#name').val(nullhtml);
            $('#email').val(nullhtml);
            $('#message').val(nullhtml);
        }
        else {
            $('.mailsuccess').html(failhtml);
        }
    }
});
})
</script>
@endsection