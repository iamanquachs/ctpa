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
                    <li><span style="font-family: 'FontAwesome';color:white">Thư viện</span>
                    </li>
                    <li class="breadcrumb-sep">/</li>

                    <li><a href="#"><span style="font-family: 'FontAwesome'; color: #1e551e">Văn bản của Hiệp hội</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="section about">
        <div class="container">

            <div class="title-default d-flex justify-content-between w-100 flex-wrap" style="margin-left: 57rem">

                <div class="content-right d-flex align-items-center justify-content-end">
                    <div class="popup-content">
                        <form action="{{URL::to('/tim-kiem-phap-luat')}}" method="post">
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
                                    <a href="{{URL::to('chi-tiet-phap-luat/'.$pl->ID_PL)}}" style="font-family: emoji; color: black; font-size: 25px">
                                        {{$pl->TIEUDE_PL}}</a>

                                    <div class="price font-600 color-default" href="{{URL::to('chi-tiet-phap-luat/'.$pl->ID_PL)}}">
                                        <span style="color: #9f6605">{{date('d/m/Y',strtotime($pl->NGAYDANG_PL))}}</span>
                                    </div>
                                    <!-- <div class="button d-flex align-items-center"> -->
                                    <a class="btn view button-main" href="{{URL::to('chi-tiet-phap-luat/'.$pl->ID_PL)}}">
                                        Xem thêm
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