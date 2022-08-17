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
    <div class="container-fluid event-section-one pt-5">
        <div class="container pt-5">
            <div class="event-sectionone p-md-5 p-sm-0">
                <div class="row p-md-5 p-sm-1">
                    <div class="col-md-4 col-sm-12 event-sectionone-header text-center pt-5">
                        <h2 class="pt-5 ">EVENTS AND NEWS SECTION</h2>
                    </div>

                    <div class="col-md-7 col-sm-12 text-center ">
                        <div class="event-section bluebg p-5">
                            <h2>Medical Trading GENETRAL TRADING EVENTS</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo ea cupiditate iure,
                                officiis inventore debitis? Nostrum earum iure error odit optio magni quis </p>
                        </div>

                        <div class="event-sectionone-take"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container pt-5">
            <div class="event-sectiontwo p-md-5 p-sm-0 ">
                <div class="row p-md-5 p-sm-0">
                    <div class="col-md-4 col-sm-12 event-sectionone-header text-center pt-5">
                        <h2 class="pt-5">EVENTS AND NEWS SECTION</h2>
                    </div>

                    <div class="col-md-7 col-sm-12 text-center ">
                        <div class="event-section bluebg p-5 ">
                            <h2>Medical Trading GENETRAL TRADING EVENTS</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo ea cupiditate iure,
                                officiis inventore debitis? Nostrum earum iure error odit optio magni quis </p>
                        </div>

                        <div class="event-sectionone-take"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="col-md-12 mt-5">
                <div class="col-md-12 contactus-header pb-3">
                    <h2 class="text-center">TRIPS</h2>
                </div>
                <ul class="nav nav-tabs text-center">
                    <li class="active ml-5"><a data-toggle="tab" href="#home">Trip 1</a></li>
                    <li class="ml-5"><a data-toggle="tab" href="#menu1">Trip 2</a></li>
                    <li class="ml-5"><a data-toggle="tab" href="#menu2">Trip 3</a></li>
                    <li class="ml-5"><a data-toggle="tab" href="#menu3">Trip 4</a></li>
                    <li class="ml-5"><a data-toggle="tab" href="#menu4">Trip 5</a></li>
                    {{-- <li class="ml-5"><a data-toggle="tab" href="#menu5">Trip 6</a></li> --}}
                </ul>

                <div class="tab-content mt-3">
                    <div id="home" class="tab-pane fade-in active">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip1/trip1.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip1/trip2.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip1/trip3.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip1/trip4.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip1/trip5.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip1/trip6.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                        </div>

                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-8 mb-2">
                                <img src="{{ asset('assets/img/trip2/trip1.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2 mt-5 pt-5">
                                <img src="{{ asset('assets/img/trip2/trip2.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip2/trip3.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip2/trip4.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip2/trip5.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                        </div>

                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip1.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip2.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip3.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip4.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip5.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip6.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip7.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip3/trip8.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                        </div>

                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip1.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip2.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip3.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip4.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip5.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip6.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip7.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip4/trip8.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                        </div>

                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                <img src="{{ asset('assets/img/trip5/trip6.png') }}" class="img-fluid rounded"
                                    alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-5 mb-2">
                                        <img src="{{ asset('assets/img/trip5/trip2.png') }}" class="img-fluid rounded"
                                            alt="">
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <img src="{{ asset('assets/img/trip5/trip3.png') }}" class="img-fluid rounded"
                                            alt="">
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <img src="{{ asset('assets/img/trip5/trip4.png') }}" class="img-fluid rounded"
                                            alt="">
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <img src="{{ asset('assets/img/trip5/trip5.png') }}" class="img-fluid rounded"
                                            alt="">
                                    </div>

                                    <div class="col-md-4 col-sm-6 offset-md-0 offset-sm-0 mb-2">
                                        <img src="{{ asset('assets/img/trip5/trip1.png') }}" class="img-fluid rounded"
                                            alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                        </div>
                    </div>

                </div>
                {{-- <div id="menu5" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <img src="{{asset('assets/img/trip5/trip6.png')}}" class="img-fluid rounded" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-5 mb-2">
                                        <img src="{{asset('assets/img/trip5/trip2.png')}}"  class="img-fluid rounded" alt="">
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <img src="{{asset('assets/img/trip5/trip3.png')}}"  class="img-fluid rounded" alt="">
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <img src="{{asset('assets/img/trip5/trip4.png')}}"  class="img-fluid rounded" alt="">
                                    </div>
                                    <div class="col-md-5 mb-2">
                                        <img src="{{asset('assets/img/trip5/trip5.png')}}"  class="img-fluid rounded" alt="">
                                    </div>

                            <div class="col-md-4 mb-2">
                                <img src="{{asset('assets/img/trip5/trip1.png')}}"  class="img-fluid rounded" alt="">
                            </div>
                                </div>

                            </div>
                        </div>

                            <div class="col-md-4 mb-2">
                            </div>
                        </div>

                    </div> --}}


            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('nav li').removeClass('active');
            $('.events-active').addClass('active');
        })
    </script>
@endsection
