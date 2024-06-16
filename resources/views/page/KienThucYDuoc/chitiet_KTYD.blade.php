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
        <div class="container" style="overflow-x: hidden;">
            <div>
                <div class="page-title diemtin">


                    @foreach($kienthucyduoc as $key=>$ktyd)
                    <h2>{{$ktyd->TIEUDE_KTYD}}

                    </h2>
                    <h3>{{date('d/m/Y',strtotime($ktyd->NGAYDANG_KTYD))}}</h3>
                    @endforeach
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <div class="block-content">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 m-b-50">
                            <div class="ckeditor_div">
                                @foreach($kienthucyduoc as $key=>$ktyd)
                                {!!$ktyd->NOIDUNG_KTYD!!}
                                @endforeach
                            </div>

                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="sidebar sidebar-collection">

                                <!-- Latest Posts -->
                                <div class="sidebar-block blogs-recent">
                                    <div class="sub-title">
                                        <h3>Tin liên quan</h4>
                                    </div>
                                    <div class="recent-article">
                                        <div class="ra-item-inner">
                                            @foreach($KTYD_lienquan as $key=>$lienquan)
                                            <div class="tinlienquan_item">
                                                <a href="{{URL::to('chi-tiet-ktyd/'.$lienquan->ID_KTYD)}}">
                                                    <img style="border-radius: 5px;" class="img-fluid" src="{{URL::to('public/upload/'.$lienquan->HINHANH_KTYD)}}" alt="">
                                                </a>
                                                <div class="article-title">
                                                    <a href="{{URL::to('chi-tiet-ktyd/'.$lienquan->ID_KTYD)}}">{{$lienquan->TIEUDE_KTYD}}</a>
                                                </div>
                                                <ul class="article-info list-inline">
                                                    <li class="article-date">{{date('d/m/Y',strtotime($lienquan->NGAYDANG_KTYD))}}</li>
                                                </ul>
                                            </div>

                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>





@endsection