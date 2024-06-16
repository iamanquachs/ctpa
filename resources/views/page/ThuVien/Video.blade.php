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
                <h2 class="title_main_red">VIDEO</h2>
            </div>
        </div>
    </div>
</section>


<div class="section blog-news">
    <div class="container">
        <div class="feature-products tab-content">


            <div class="block-content m-top">
                <div style="display: flex; flex-wrap: wrap;">
                    @foreach($thuvien as $key=>$tv)

                    <div class="row" id="row_video" href="#">
                        @if($tv->ID_CHUYENMUC_TV==1)
                        <img src="{{URL::to('public/upload/'.$tv->FILE_TV)}}" style="width: 22.5rem"> @elseif($tv->ID_CHUYENMUC_TV==2)
                        <video style="width: 22.5rem" controls>
                            <source src="{{URL::to('public/upload/'.$tv->FILE_TV)}}" type="video/mp4">
                        </video>
                        @endif
                    </div>


                    @endforeach

                </div>
            </div>
        </div>
        <div class="phantrang">
            {{ $thuvien->links("pagination::bootstrap-4") }}

        </div>
    </div>
</div>



@endsection