@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
            <div class="page-title-container">
                <h1 class="text-center">HỘI DƯỢC HỌC TP. CẦN THƠ</h1>
            </div>
            <div class="breadcrumbs-container text-center">
                <ul class="breadcrumbs primary-font">
                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: white">Văn bản</span></a>
                    </li>
                    <li class="breadcrumb-sep">/</li>

                    @foreach($chuyenmuc_ten as $key=>$vb)
                    <li><span style="font-family: 'FontAwesome'; color: #ffff">{{$vb->TEN_CHUYENMUC_VB}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <!-- <div class="section about">
        <div class="container">

            <div class="title-default d-flex justify-content-between w-100 flex-wrap" style="margin-left: 57rem">


                <div class="content-right d-flex align-items-center justify-content-end">
                    <div class="popup-content">
                        <form action="{{URL::to('/tim-kiem-van-ban')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                                <div class="input-group-btn">
                                    <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e"><i class="fa fa-search"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div> -->


    <div class="section product-default-item">
        <div class="container">

            <div class="feature-products tab-content">

                <!-- List -->
                <div id="list" class="tab-pane active">
                    <div class="product">
                        <div class="item">
                            @foreach($danhmuc as $key=>$chuyenmuc)

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="content-right diemtin" style="min-width: 100%; color: black;border-bottom: 1px solid #ddd;padding: 15px 0;">
                                        <a class="title">
                                            {{$chuyenmuc->TIEUDE_VB}}</a>

                                        <div class="price font-600 color-default">
                                            <span style="color: #9f6605">{{date('d/m/Y',strtotime($chuyenmuc->NGAYDANG_VB))}}</span>
                                        </div>
                                        <div class="button d-flex align-items-center">
                                            <a class="btn view button-main" target="_blank" href="{{asset('public/upload'.$chuyenmuc->FILE_VB)}}">
                                                Tải về
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

                {{ $danhmuc->links("pagination::bootstrap-4") }}


            </div>
        </div>
    </div>



    @endsection