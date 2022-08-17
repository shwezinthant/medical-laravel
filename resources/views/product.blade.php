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
            <div class="row pt-5">
                <div class="col-md-6">
                    <div class="syring">
                        <img src="{{ asset('assets/img/background/image006.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 p-5 my-5   text-center">
                    <div class="product-banner p-4">

                        <h2>PRODUCTS OF Medical Trading GENERAL TRADING CO.,LTD</h2>
                        <div class="row">
                            <div class="col-md-6 text-center product-p">
                                <p>INJECTION</p>
                            </div>
                            <div class="col-md-6 text-center product-p">
                                <p>INFUSION</p>
                            </div>
                            <div class="col-md-6 text-center product-p">
                                <p>INSTUMENTS</p>
                            </div>
                            <div class="col-md-6 text-center product-p">
                                <p>TABLETS AND CREAM</p>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi consequuntur illum magni laborum
                            excepturi aut at repellendus. Iste nulla, ea commodi est excepturi libero temporibus </p>

                    </div>
                    <div class="product-take-one">
                    </div>
                </div>
            </div>

            @foreach ($categories as $category)
                <div class="replace-product mb-5">
                    <div class="sectiontwo">
                        @php
                            switch ($category->id) {
                                case '6':
                                    $sectiontwo_category="sectiontwo-categoryone";
                                    $leftOrright = 'offset-md-0';
                                    break;
                                case '7':
                                    $sectiontwo_category="sectiontwo-categorytwo";
                                    $leftOrright = 'offset-md-6';
                                    break;
                                case '8':
                                    $sectiontwo_category="sectiontwo-categorythree";
                                    $leftOrright = 'offset-md-0';
                                    break;

                                default:
                                    $sectiontwo_category="sectiontwo-categoryfour";
                                    $leftOrright = 'offset-md-6';
                                    break;
                            }
                        @endphp
                        <div class="{{ $sectiontwo_category }} p-md-5 p-sm-0 sectiontwo-one">
                            <div class="row p-md-5 p-sm-0">
                                <div class="col-md-5 col-sm-12 {{ $leftOrright }}">
                                    <div class="product-setiontwo-text p-5">
                                        <h2>PRODUCTS FOR {{ $category->name }}</h2>
                                        <p>{{ $category->description }}</p>
                                    </div>
                                    <div class="product-sectiontwo-take"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="product-sectionthree mt-4">
                    <div class="product-sectionthree-sub mt-5">
                        <div class="row replacetwo">
                                @foreach ($productsoffirst as $productsof)
                                <div class="col-md-3 col-sm-6">
                                    <div class="productline-frame text-center" style="overflow: visible">
                                        <div style="width:100;height:200px;overflow:hidden">
                                            <img class="img-fluid" src="/photo/{{ $productsof->main_photo_path }}" alt="">
                                        </div>
                                        <p>{{ $productsof->name }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if ($productsoffirst->lastPage() > 1)
                            <div class="row mt-5 pt-4">
                                <div class="col-md-4 offset-md-5">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link replacethree" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            @for ($i = 1; $i <= $productsoffirst->lastPage(); $i++)
                                                @php
                                                    $url = '/products?page=' . $i;

                                                @endphp
                                                <li class="page-item"><a class="page-link"
                                                        href="{{ url($url) }}">{{ $i }}</a></li>

                                            @endfor
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>


                            </div>
                        @endif




                    </div>
                </div> --}}
                    <div class="product-sectionthree mt-4">
                        <div class="product-sectionthree-sub mt-5 ">
                            <h2 class="pb-3">{{ $category->name }}</h2>
                            <div class="row replacetwo replace{{ $category->id }}">
                                @foreach ($category->products->take(4) as $product)
                                    <div class="col-md-3 col-sm-6 offset-md-0 offset-sm-0 offset-1 pl-4 pl-md-0 pl-sm-0">
                                        <a href="{{ route('product_detail_page', $product->id) }}">
                                            <div class="productline-frame text-center">
                                                <img src="photo/{{ $product->main_photo_path }}" alt="">
                                                <p>{{ $product->name }}</p>
                                            </div>
                                        </a>

                                    </div>
                                @endforeach


                            </div>
                            <div class="row moreorless">
                                <div class="col-md-2 text-center offset-md-5 mt-2 seemorediv{{ $category->id }}">
                                    <button class="btn seemore" data-categoryid="{{ $category->id }}">SEE MORE</button>
                                    <div class="seemoretake"></div>
                                </div>
                            </div>
                        </div>
                    </div>




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
            $('.products-active').addClass('active');
            $('.moreorless').on('click', '.seemore', function() {

                var id = $(this).data('categoryid');

                $.ajax({
                    type: 'POST',
                    url: '/show-category-product',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "category_id": id,
                    },

                    success: function(data) {
                        var html = ``;

                        $.each(data[0], function(i, v) {
                            var url = "/products/detail/" + v.id;
                            html += `
                                <div class="col-md-3 col-sm-6 mb-3 offset-1 offset-md-0 offset-sm-0 pl-4 pl-md-0 pl-sm-0">
                                <a href="${url}">
                                    <div class="productline-frame text-center">
                                        <img src="photo/${v.main_photo_path}" alt="">
                                        <p>${v.name}</p>
                                    </div>
                                </div>
                       `
                        });

                        var htmltwo = `
                                    <button class="btn seeless" data-categoryid="${data[1]}">SEE LESS</button>
                                    <div class="seemoretake"></div>
                    `;

                        var re = ".replace" + data[1];
                        $(re).empty();
                        $(re).html(html);
                        var ree = ".seemorediv" + data[1];
                        $(ree).empty();
                        $(ree).html(htmltwo);

                    }

                });
            });

            $('.moreorless').on('click', '.seeless', function() {

                var id = $(this).data('categoryid');

                $.ajax({
                    type: 'POST',
                    url: '/showless-category-product',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "category_id": id,
                    },

                    success: function(data) {
                        var html = ``;

                        $.each(data[0], function(i, v) {
                            var url = "/products/detail/" + v.id;
                            html += `
                                <div class="col-md-3 col-sm-6 mb-3 offset-1 offset-md-0 offset-sm-0 pl-4 pl-md-0 pl-sm-0">
                                <a href="${url}">
                                    <div class="productline-frame text-center">
                                        <img src="photo/${v.main_photo_path}" alt="">
                                        <p>${v.name}</p>
                                    </div>
                                </div>
                       `
                        });

                        var htmltwo = `
                                    <button class="btn seemore" data-categoryid="${data[1]}">SEE MORE</button>
                                    <div class="seemoretake"></div>
                    `;

                        var re = ".replace" + data[1];
                        $(re).empty();
                        $(re).html(html);
                        var ree = ".seemorediv" + data[1];
                        $(ree).empty();
                        $(ree).html(htmltwo);

                    }

                });
            })
        });
    </script>
@endsection
