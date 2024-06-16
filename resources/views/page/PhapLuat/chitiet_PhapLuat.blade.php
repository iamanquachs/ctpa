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
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Thư viện</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>

                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Văn bản pháp luật</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>
                    @foreach($chuyenmuc_ten as $key=>$chuyenmuc)
                    <li><span style="font-family: 'FontAwesome'; color: white">{{$chuyenmuc->TEN_CHUYENMUC_PL}}</span>
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
            <div>
                <div class="page-title diemtin">

                    @foreach($phapluat as $key=>$pl)
                    <h2>{{$pl->TIEUDE_PL}}

                    </h2>

                    <h3>{{date('d/m/Y',strtotime($pl->NGAYDANG_PL))}}</h3>
                    @endforeach
                </div>
            </div>


            <div class="section wrap-product-categories" style="margin-bottom: 1px; color: black">
                <div class="block-content m-top">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 m-b-50">
                            <div class="ckeditor_div">
                                @foreach($phapluat as $key=>$pl)
                                {!!$pl->NOIDUNG_PL!!}
                                <div style="color: #b36b00; font-size: 16px">Download: <a href="{{asset('public/upload'.$pl->FILE_PL)}}" style="color: #0059b3"> tài liệu</a></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="sidebar sidebar-collection">

                                <!-- Latest Posts -->
                                <div class="sidebar-block blogs-recent">
                                    <div class="sub-title" style="width: 18rem">
                                        <h3>Pháp luật liên quan</h4>
                                    </div>
                                    <div class="recent-article">
                                        <div class="ra-item-inner">
                                            @foreach($PL_lienquan as $key=>$lienquan)
                                            <div class="article-item clearfix ">

                                                <div class="articleinfo-group" style="width: 18rem">
                                                    <div class="article-title">
                                                        <h2 class="article-name"><a href="blog-detail.html">{{$lienquan->TIEUDE_PL}}</a></h2>
                                                    </div>
                                                    <ul class="article-info list-inline">
                                                        <li class="article-date">{{$lienquan->NGAYDANG_PL}}</li>
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
    </div>
</section>





@endsection