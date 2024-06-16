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

                    @foreach($diemtin as $key=>$dt)
                    <h2>{{$dt->TIEUDE_DT}}

                    </h2>
                    <h3>{{date('d/m/Y',strtotime($dt->NGAYDANG_DT))}}</h3>
                    @endforeach
                </div>
            </div>

            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">

                <div class="block-content">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 m-b-50">
                            <div class="ckeditor_div">
                                @foreach($diemtin as $key=>$dt)
                                {!!$dt->NOIDUNG_DT!!}
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
                                            @foreach($DT_lienquan as $key=>$lienquan)
                                            <div class="tinlienquan_item">
                                                <a href="{{URL::to('chi-tiet-diem-tin/'.$lienquan->ID_DT)}}">
                                                    <img style="border-radius: 5px;" class="img-fluid" src="{{URL::to('public/upload/'.$lienquan->HINHANH_DT)}}" alt="">
                                                </a>
                                                <div class="article-title">
                                                    <a href="{{URL::to('chi-tiet-diem-tin/'.$lienquan->ID_DT)}}">{{$lienquan->TIEUDE_DT}}</a>
                                                </div>
                                                <ul class="article-info list-inline">
                                                    <li class="article-date">{{date('d/m/Y',strtotime($lienquan->NGAYDANG_DT))}}</li>
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