@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
        </div>
    </div>
</div>

<section>
    <div class="section about">
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
                <h2 class="title_main_red">THÔNG TIN Y DƯỢC</h2>
            </div>
            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">
                <div class="content-about text-center">
                    <div class="row">
                        @foreach($chuyenmucphapluat as $key=>$chuyenmuc)
                        <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50" style="margin-bottom: 2rem;     ">
                            <div class="right-left hidden-xs slow disciver-now" class="dd" style="background-color: white; width: 19rem">
                                <a class="btn button button-main" href="{{URL::to('chuyen-muc-phap-luat/'.$chuyenmuc->ID_CHUYENMUC_PL)}}" style="width: 18rem;  background-color: #1e551e; border: 1px solid #1e551e; border-radius: 1px;">{{$chuyenmuc->TEN_CHUYENMUC_PL}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="section product-default-item">
    <div class="container">
        <div class="feature-products tab-content">

            <!-- List -->
            <div id="list" class="tab-pane active">
                <div class="product">
                    <div class="item">
                        @foreach($phapluat as $key=>$pl)
                        <div class="" style="margin-bottom: 10px">

                            <div>
                                <div class="content-right" style="min-width: 100%; color: black;border-bottom: 1px solid #ddd;padding: 15px 0;">
                                    <a style="font-family: emoji; color: black; font-size: 25px">
                                        {{$pl->TIEUDE_PL}}</a>

                                    <div class="price font-600 color-default">
                                        <span style="color: #9f6605">{{date('d/m/Y',strtotime($pl->NGAYDANG_PL))}}</span>
                                    </div>
                                    <!-- <div class="button d-flex align-items-center"> -->
                                    <a class="btn view button-main" href="{{asset('public/upload'.$pl->FILE_PL)}}" target="_blank">
                                        Tải về
                                        <i class="fa fa-chevron-double-left"></i></a>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>


                </div>
            </div>
        </div>
        <div class="phantrang">
            {{ $phapluat->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>




@endsection