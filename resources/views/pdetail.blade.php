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

            <div class="row my-5">
                <div class="col-md-12 col-12 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('product_page') }}">Back to Product</a></li>
                        <li class="breadcrumb-item">{{ $product->category->name }}</li>
                        <li class="breadcrumb-item active">{{ $product->name }}</li>
                    </ol>
                </div>
                <div class="col-md-12 p-3 text-center productline">
                    <h2>{{ $product->name }}</h2>
                </div>
                <div class="row">
                    <div class="col-md-5 shadow">
                        <div class="row mainphoto">
                            <img src="/photo/{{ $product->main_photo_path }}" class="img-fluid rounded" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-3 subphoto">
                                <img src="/photo/{{ $product->main_photo_path }}"
                                    data-imgsrc="/photo/{{ $product->main_photo_path }}" class="img-fluid subphotoimg"
                                    alt="">
                            </div>
                            @for ($i = 0; $i < count($subphoto); $i++)
                                @php
                                    $trimsub = trim($subphoto[$i], '"');
                                @endphp
                                <div class="col-md-3 subphoto">
                                    <img src="/photo/{{ $trimsub }}" data-imgsrc="/photo/{{ $trimsub }}"
                                        class="img-fluid subphotoimg" alt="">
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-md-7 px-2 ">
                        <div class="productdetail rounded p-4">
                            <div class="col-md-12 p-3 text-center productline">
                                <h2 class="text-white">
                                    {{ $product->sub_name }}
                                </h2>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p class="productdetailtext">
                                        Chemical Composition:
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <p class="productdetailtext">
                                        {{ $product->composition }}
                                    </p>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p class="productdetailtext">
                                        Country Of Origin
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <p class="productdetailtext">
                                        {{ $product->country_of_origin }}
                                    </p>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p class="productdetailtext">
                                        Usage:
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <p class="productdetailtext">
                                        {{ $product->usage }}
                                    </p>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p class="productdetailtext">
                                        Price:
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <p class="productdetailtext">
                                        {{ $product->selling_price }} MMK
                                    </p>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p class="productdetailtext">
                                        Availability:
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <p class="productdetailtext">
                                        @php
                                            echo $product->instock_qty > 0 ? 'In stock' : 'Out of Stock';
                                        @endphp
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>


                {{-- <div class="product-sectionthree mt-4">
                    <div class="product-sectionthree-sub mt-5 ">
                        <h2 class="pb-3">Recommended Prodocuts</h2>
                        <div class="row replacetwo">
                            @foreach ($recmdproducts as $recmdproduct)
                                <div class="col-md-3 col-sm-6">
                                    <a href="{{ route('product_detail_page', $recmdproduct->id) }}">
                                        <div class="productline-frame text-center">
                                            @php
                                                $path = 'photo/' . $recmdproduct->main_photo_path;
                                            @endphp
                                            <img src="{{ asset($path) }}" alt="">
                                            <p>{{ $recmdproduct->name }}</p>
                                        </div>
                                    </a>

                                </div>
                            @endforeach


                        </div>

                    </div>
                </div> --}}







            </div>

            <div class="product-sectionthree mt-4">
                <div class="product-sectionthree-sub mt-5 ">
                    <h2 class="pb-3">Recommended Prodocuts</h2>


                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            @for ($i = 0; $i < $count; $i++)
                                <div class="carousel-item 
                                <?php
                                $startpt = 0;
                                if ($i == 0) {
                                    echo 'active';
                                }
                                ?>
                                ">
                                    <div class="row">

                                        @foreach ($recmdproducts as $key => $recmdproduct)
                                          
                                        @php
                                            switch ($i) {
                                                case '0':
                                                    $startpt= 0;
                                                    $endpt= 3;
                                                    break;
                                                case '1':
                                                    $startpt= 4;
                                                    $endpt= 7;
                                                    break;
                                                case '2':
                                                    $startpt= 8;
                                                    $endpt= 11;
                                                    break;
                                                case '3':
                                                    $startpt= 12;
                                                    $endpt= 15;
                                                    break;
                                               
                                            }
                                        @endphp
                                           @if ($startpt<=$key)
                                           <div class="col-md-3 col-sm-6 offset-md-0 offset-sm-0 offset-1 offset-md-0 offset-sm-0 pl-4 pl-md-0 pl-sm-0">
                                            <a href="{{ route('product_detail_page', $recmdproduct->id) }}">
                                                <div class="productline-frame text-center">
                                                    @php
                                                        $path = 'photo/' . $recmdproduct->main_photo_path;
                                                    @endphp
                                                    <img src="{{ asset($path) }}" alt="">
                                                    <p>{{ $recmdproduct->name }}</p>
                                                </div>
                                            </a>

                                        </div>
                                      
                                           @endif
                                           <?php if ($key==$endpt)
                                           break;
                                       ?>
                                              
                                        @endforeach

                                    </div>
                                </div>
                            @endfor
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
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
            $('.products-active').addClass('active');
            $('.subphotoimg').click(function() {
                var src = $(this).data('imgsrc');
                var html = `
            <img src="${src}" class="img-fluid rounded" alt="">
            `;
                $('.mainphoto').html(html);
            })
        })

    </script>
@endsection
