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
                <h2 class="title_main_red">THƯ VIỆN</h2>
            </div>
        </div>
    </div>
</section>


<div class="section blog-news">
    <div class="container">
        <div class="feature-products tab-content">


            <div class="block-content">
                <div class="row">
                    @foreach($thuvien as $key=>$tv)
                    <div class="col-sm-3 col-12">
                        <div class="thuvien_item2" href="#">
                            <img onclick="load_img_modal(this)" id="img_modal" data-img="{{URL::to('public/upload/'.$tv->FILE_TV)}}" src="{{URL::to('public/upload/'.$tv->FILE_TV)}}" data-toggle="modal" data-target="#img_thuvien">
                        </div>
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

<div id="img_thuvien" class="modal" tabindex="-1" role="dialog" style="z-index:999">
    <div class="modal-dialog" role="document" style="max-width: 750px;">
        <div class="modal-content" style="z-index:999">
            <div class="modal-header">
                <button type="button" class="close" style="padding:unset;margin-right:5px;margin-top: 0;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="thuvien_item" class="modal-body">
            </div>
            <div class="modal-footer row" style="margin: 0; gap:45px">
                @foreach($thuvien as $key=>$tv)
                <div class="col-sm-3 col-12">
                    <div class="img_modal" href="#">
                        <img onclick="load_img_modal(this)" data-img="{{URL::to('public/upload/'.$tv->FILE_TV)}}" src="{{URL::to('public/upload/'.$tv->FILE_TV)}}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function load_img_modal(e) {
        $("#thuvien_item").html("")
        var img = $(e).data("img");
        $("#thuvien_item").html("<img style='width:100%' src = '" + img + "' >");
    }
</script>