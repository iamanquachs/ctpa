@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">

        </div>
    </div>
</div>




<div class="section product-default-item">
    <div class="container">
        <!-- <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

            <div class="content-about text-center m-top" style="margin-top:1rem">
                <div class="row" style="justify-content: center">
                    <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" style="padding:5px 0">
                        <div class="right-left hidden-xs slow disciver-now" class="dd">
                            <a class="btn button button-main" style="background-color: #1e551e;min-width: 200px;padding:10px 0;" href="{{URL::to('/thu-vien')}}">Ảnh</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" style="padding:5px 0">

                        <div class="right-left hidden-xs slow disciver-now" class="dd">
                            <a class="btn button button-main" style="background-color: #1e551e;min-width: 200px;padding:10px 0;" href="{{URL::to('/chuyen-muc-thu-vien/2')}}">Video</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" style="padding:5px 0">

                        <div class="right-left hidden-xs slow disciver-now" class="dd">
                            <a class="btn button button-main" style="background-color: #1e551e;min-width: 200px;padding:10px 0;" href="{{URL::to('/thong-tin-y-duoc')}}">Thông tin y dược</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" style="padding:5px 0">
                        <div class="right-left hidden-xs slow disciver-now" class="dd">
                            <a class="btn button button-main" style="background-color: #1e551e;min-width: 200px;padding:10px 0;" href="{{URL::to('/kien-thuc-y-duoc')}}">Kiến thức y dược</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="page-title diemtin">
            <h2 class="title_main_red">KIẾN THỨC Y DƯỢC</h2>
        </div>
        <div class="feature-products tab-content">
            <!-- List -->
            <div id="list" class="tab-pane active">
                <div class="product">
                    <div class="item">
                        @foreach($kienthucyduoc as $key=>$ktyd)
                        <div class="row" style="margin-bottom: 50px">

                            <div class="col-md-5 col-sm-12">
                                <div class="product-thumb">
                                    <div class="product-container item-img">
                                        <div class="product-image-container">
                                            <a class="product-img-link" href="{{URL::to('chi-tiet-ktyd/'.$ktyd->ID_KTYD)}}" title=""><img class="w-100" src="{{URL::to('public/upload/'.$ktyd->HINHANH_KTYD)}}" alt="img" style="border-radius: 0.5rem">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div class="content-right diemtin" style="color: black">
                                    <a class="title" href="{{URL::to('chi-tiet-ktyd/'.$ktyd->ID_KTYD)}}">
                                        {{$ktyd->TIEUDE_KTYD}}</a>

                                    <div class="price font-600 color-default" href="{{URL::to('chi-tiet-ktyd/'.$ktyd->ID_KTYD)}}">
                                        <span style="color: #9f6605">{{date('d/m/Y',strtotime($ktyd->NGAYDANG_KTYD))}}</span>
                                    </div>
                                    <div class="button d-flex align-items-center">
                                        <a class="btn view button-main" href="{{URL::to('chi-tiet-ktyd/'.$ktyd->ID_KTYD)}}">
                                            Xem thêm
                                            <i class="fa fa-chevron-double-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>


                </div>
            </div>
        </div>

        <div class="phantrang">
            {{ $kienthucyduoc->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>





@endsection