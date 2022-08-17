@extends('master')
@section('content')
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="assets/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
                <img src="assets/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
                <img src="assets/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">

                                <div class="col-md-6 slider-text-bg p-4">
                                    <div style="position: relative;">
                                        <h2 class="">Medical Website CO.,LTD.</h2>
                                        <p class="slider-paraghone mb-3"> Choose MJY products with confidence, you have
                                            chosen the trustworthy medical products </p>
                                        <p class="slider-paraghone">Complying with ISO 9001 13485 International Standards.
                                        </p>

                                    </div>
                                    <div class="bg-danger"
                                        style="width: 55px;height:48px;position: absolute;left:-20px;top:-15px;z-index:-1; border-radius: 0px 10px 10px 10px;">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">

                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">

            </div>
        </div>
    </div><!-- End Slider -->

    <div class="container-fluid mainbody">
        <div class="container pt-5">
            <div class="row pb-4">
                <div class="col-md-6 mt-5 glance text-center">
                    <h3>PROFILE AT A GLANCE</h3>
                    <div class="glance-year mb-3 float-left">
                        <h2 class=" pl-5">1996</h2>
                        <p class=" pl-5">ESTABLISHED YEAR</p>
                    </div>
                    <div class="glance-employee">
                        <h2>40</h2>
                        <p>NO. OF EMPLOYEE</p>

                    </div>
                    <div class="clearfix"></div>
                    <div class="w-100 textone">USD 12 MILLIONS</div>
                    <p class=" mb-4">INVESTMENT</p>
                    <button class="btn btn-primary">Learn More</button>

                </div>

                <div class="col-md-6 p-4">
                    <div class="frame">
                        <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="container-fluid secondsection p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="vission p-3 text-center">
                        <h2>VISION</h2>
                        <p>Medical General Trading Co., Ltd is committed to provide an efficient, professional and
                            responsive touch to deliver the best pharmaceutical products to our value client.</p>
                    </div>
                    <div class="redtakeone">

                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="vission p-3 text-center">
                        <h2>MISSION</h2>
                        <p>Medical General Trading Co., Ltd mission is to provide safety to global healthcare by developing
                            and supplying products that are highest quality.</p>
                    </div>

                    <div class="redtaketwo">

                    </div>
                </div>
                <div class="col-md-6 offset-md-3 mb-4">
                    <div class="vission p-3 text-center">
                        <h2>OBJECTIVES</h2>
                        <p>Medicine General Trading Co., Ltd is trying to export MJY products and is exploring to the
                            adjacent nations for the additional market acquisition, aiming to bring the virtue of its
                            quality products to every part of the world.</p>
                    </div>
                    <div class="redtakethree">

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid thirdsection p-4">
        <div class="container">
            <div class="row">
                <div class="col-12 product-ebcare text-center mb-4">
                    <h2 class="mb-1 mt-5">eBcare Blood Glocose</h2>
                    <p>Monitoring System</p>
                </div>
                <div class="col-md-3 mb-3">
                    <div style="position: relative">
                        <div class="accurate p-3 mb-2">
                            <h2>Accurate Result</h2>
                            <p>သွေးချိုတိုင်းစက်လေးကတော့ ဆေးရုံဆေးခန်းတွေမှာ အသုံးများပြီး…
                                - နေအိမ်တွင် မိမိကိုယ်တိုင် စမ်းသပ်စစ်ဆေးနိုင်သော …
                                - တိကျမှန်ကန်တဲ့ အဖြေထွက်ခြင်းနှင့် ဈေးနှုန်းသက်သာသော…
                            </p>
                        </div>
                        <div class="ebare-take-one"></div>
                    </div>
                    <div style="position: relative">
                        <div class="accurate p-3">
                            <h2>Ready to Use</h2>
                            <p>သွေးချိုတိုင်းစက် + သွေးဖောက်ကိရိယာ(1)ခု + အပ် (50)ခု + Test Strip (50)ခု + Lithium Battery
                                တို့ပါဝင်ပြီး အိတ်ကလေးဖြင့် သေသေသပ်သပ်ထည့်ထားပေးပါတယ် …
                            </p>
                        </div>
                        <div class="ebare-take-two">

                        </div>
                    </div>

                </div>
                <div class="col-md-6 mb-3">
                    <div class="ebcareframe">
                        <img src="{{ asset('assets/img/instuments/eBcare.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="position: relative">
                        <div class="accurate p-3 mb-2">
                            <h2>Made in Taiwan</h2>
                            <p>Quality ကောင်းလို့လူကြိုက်များတဲ့ ထိုင်ဝမ်နိုင်ငံထုတ် အရည်အသွေးမြင့် (eBcare )
                                တံဆိပ်စက်လေးဖြစ်ပါတယ်…
                            </p>
                        </div>
                        <div class="ebare-take-four">

                        </div>
                    </div>

                    <div style="position: relative">
                        <div class="accurate p-3">
                            <h2>Easy to Buy
                            </h2>
                            <p>Test Strip များကိုလည်း အလွယ်တကူ ဝယ်ယူ ရရှိနိုင်ပါတယ်…
                            </p>
                        </div>
                        <div class="ebare-take-five"></div>
                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 p-3 text-center productline">
                    <h2>PRODUCT LINE</h2>
                </div>
            </div>
            <div class="row mb-4">
                @foreach ($categories as $category)
                    <div class="col-md-3 col-sm-6 offset-1 offset-md-0 offset-sm-0">
                        <a href="{{ route('product_page') }}">
                            <div class="productline-frame text-center">
                                <img src="/category/{{ $category->photo }}" alt="">
                                <p>{{ $category->name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('nav li').removeClass('active');
            $('.home-active').addClass('active');
        })
    </script>
@endsection
