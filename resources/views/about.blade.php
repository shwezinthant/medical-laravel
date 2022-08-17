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
        <div class="container py-5">
            <div class="replace-product pt-5">
                <div class="sectiontwo">
                    <div class="about-sectiontwo-frame p-md-5 p-sm-0">
                        <div class="row p-md-5 p-sm-0">
                            <div class="col-md-8">
                                <div class="about-sectionone p-5">
                                    <h2 class="text-center">COMPANY PROFILE</h2>
                                    <h3 class="text-center">Medical Trading GENERAL TRADING CO.,LTD</h3>
                                    <p>Company : Medical Trading General Trading Co.,Ltd</p>
                                    <p>Investment : US $ 12 Millions</p>
                                    <p>Date of Operation: 1996</p>
                                    <p>Number of Employee : 40</p>
                                    <p>Business Line: Trading and Distribution</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>Distribution for :</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>(1) ANB Laboratories Co.,Ltd (Thailand)</p>
                                            <p>(2) Medicpharma Co., Ltd (Thailand)</p>
                                            <p>(3) Visgeneer Inc (Taiwan)</p>
                                            <p>(4) Guangzhou Berrcom Medical Device Co.Ltd (China)</p>
                                        </div>
                                    </div>
                                    <p>Brand : ANB, eBcare, Berrcom</p>
                                </div>
                                <div class="product-sectiontwo-take"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="about-two my-4">
                <div class="row">
                    <div class="col-md-12 text-center pt-5">
                        <img src="{{ asset('assets/img/background/title.png') }}" class="h-75" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-5 offset-md-1 diamond-gp">
                            <div class=" mb-5 diamond-groups-one">
                                <img src="{{ asset('assets/img/background/image011.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 mb-5 offset-md-1">
                            <div class=" mb-5 diamond-groups-two">
                                <img src="{{ asset('assets/img/background/image012.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 mb-5 offset-md-1">
                            <div class=" mb-5 diamond-groups-three">
                                <img src="{{ asset('assets/img/background/image013.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 mb-5 offset-md-1">
                            <div class=" mb-5 diamond-groups-four">
                                <img src="{{ asset('assets/img/background/image014.png') }}" alt="">
                            </div>
                        </div>
                        <img class="logo-circle w-25 d-sm-none d-md-block"
                            src="{{ asset('assets/img/background/logo_circle.png') }}" alt="">

                    </div>


                </div>
            </div>
            <div class="about-three">
                <div class="row about-three-bg p-md-5 p-sm-3 ">
                    <div class="col-md-6 mb-4">
                        <div class="vission p-3 text-center bluebg">
                            <h2>VISSION</h2>
                            <p>Medical Trading General Trading Co., Ltd is committed to provide an efficient, professional
                                and responsive touch to deliver the best pharmaceutical products to our value client.</p>
                        </div>
                        <div class="redtakeone">

                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="vission p-3 text-center bluebg">
                            <h2>MISSION</h2>
                            <p>Medical Trading General Trading Co., Ltd mission is to provide safety to global healthcare by
                                developing and supplying products that are highest quality.</p>
                        </div>

                        <div class="redtaketwo">

                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 mb-4">
                        <div class="vission p-3 text-center bluebg">
                            <h2>OBJECTIVES</h2>
                            <p>Medical Trading General Trading Co., Ltd is trying to export MJY products and is exploring to
                                the adjacent nations for the additional market acquisition, aiming to bring the virtue of
                                its quality products to every part of the world.</p>
                        </div>
                        <div class="redtakethree">

                        </div>
                    </div>

                </div>
            </div>
            <div class="about-four mt-5 pt-5">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" src="{{ asset('assets/img/background/map.png') }}" alt="">
                    </div>
                    <div class="col-md-7 our-network">
                        <h2>OUR NETWORK</h2>
                        <p class="mb-4">Office Information</p>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Address</p>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-4">
                                    <p>(1): No(11),135th Street, Ma U Gone Quater,Tamwe Township, Yangon Division, Myanmar
                                    </p>
                                    <p class="">Tel: (95) 9 452105074, (95) 9 9507047</p>
                                </div>
                                <div class="mb-4">
                                    <p>
                                        (2): No.216/222, 8B, 8C & 8D, Corner of Bo Myat Htun Road & Mahbandoola Road, Bo
                                        Myat Htun Housing, Pazundanung T/S, Yangon, Myanmar.
                                    </p>
                                    <p>Tel: (95) 1-8202578, (95) 1-8293891, (95) 9-73041385,</p>
                                    <p>Fax: (95) 1 8293875</p>
                                </div>
                                <div class="">
                                    <p>(3): No. (Ta 2/7), Between 63 St: & 64 St:, 102 A St:, Chanmyatharsi Townsip,
                                        Mandalay Division.</p>
                                    <p>Tel: (95) 9 2015782, (95) 92110903, (95) 9 2110982</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-5">
                            <span><img style="width:35px" src="{{ asset('assets/img/location.png') }}"
                                    alt=""></span>
                            <span>
                                BRANCHES OF Medical Trading GENERAL TEADING CO., LTD.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('nav li').removeClass('active');
            $('.about-active').addClass('active');
        })
    </script>
@endsection
