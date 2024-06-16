@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">HỘI CÔNG CHỨNG VIÊN TP. CẦN THƠ</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Văn bản</span></a>
                    </li>

                    <li class="breadcrumb-sep">/</li>
                    @foreach($vanban as $key=>$vb)
                    <li><span style="font-family: 'FontAwesome'; color: #ffff">{{$vb->TIEUDE_VB}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


<section>
    <div class="section about">
        <div class="container">
            <div class="page-title diemtin">
                @foreach($vanban as $key=>$vb)
                <h2>{{$vb->TIEUDE_VB}} </h2>
                <h3>{{date('d/m/Y',strtotime($vb->NGAYDANG_VB))}}</h3>
                @endforeach
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">
                <div class="row">

                    <div class="col-md-3 col-sm-12">
                        <div class="sidebar sidebar-collection">

                            <!-- Latest Posts -->
                            <div class="sidebar-block blogs-recent">
                                <div class="sub-title">
                                    <h3 style="width: 18rem">Văn bản liên quan</h4>
                                </div>
                                <div class="recent-article">
                                    <div class="ra-item-inner">
                                        @foreach($VB_lienquan as $key=>$lienquan)
                                        <div class="article-item clearfix ">
                                            <div class="article-image" style="width: 18rem">
                                                <a href="{{URL::to('chi-tiet-van-ban/'.$lienquan->ID_VB)}}"><img class="img-fluid" src="{{URL::to('public/upload/'.$lienquan->HINHANH_VB)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="articleinfo-group" style="width: 18rem">
                                                <div class="article-title">
                                                    <h2 class="article-name"><a href="blog-detail.html">{{$lienquan->TIEUDE_VB}}</a></h2>
                                                </div>
                                                <ul class="article-info list-inline">
                                                    <li class="article-date">{{$lienquan->NGAYDANG_VB}}</li>
                                                </ul>
                                            </div>
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
</section>





@endsection