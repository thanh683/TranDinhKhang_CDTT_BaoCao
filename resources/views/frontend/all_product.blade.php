@extends('layouts.frontend.site')
@section('title','Trang chủ')
@section('header')
<link rel="stylesheet" href="{{ asset('css/form_filter.css') }}">
@endsection
@section('footer')
<script src="{{ asset('js/add2cart.js') }}"></script>
<script src="{{ asset('js/form_filter.js') }}"></script>
@endsection
@section('content')
    <section class="body container mt-4 ">
        <div class="row ">
        <div class="col-md-3 form_filter">
            <x-site-filter :slugselect="1"/>
        </div>
        <div class="product_cate col-md-9 ">

            <div id="" class="h4 pb-2 mb-4  border-bottom border-danger fst-italic">
                <a class="title" > Tất Cả Sản Phẩm</a>
            </div>
    
            <div class="product my-3">
                <div class="row">
                    @foreach($list_product as $product)
                    <div class="col-6 col-md-4">
                        <x-product-item :productitem="$product"/>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">  {!! $list_product->onEachSide(5)->links() !!}</div>
    </div>
</div>
        

    </section>


@endsection