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
        <div style="display:flex; justify-content:space-between;width:100%">
            <div class="page-title diemtin" style="width: 100%;">
                <h2 class="title_main_red">BIỂU MẪU</h2>
            </div>
            <div class="title-default d-flex justify-content-end w-100 flex-wrap">
                <div class="content-right d-flex align-items-center justify-content-end">
                    <div class="popup-content">
                        <form {{-- id="searchbox" --}} action="{{URL::to('/tim-kiem-bieu-mau')}}" method="post">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input style="margin-top: 0;" class="search-query form-control" type="text" name="tu_timkiem" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                                <div class="input-group-btn" style="background-color: #1e551e; border-top-right-radius:5px; border-bottom-right-radius:5px">
                                    <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e"><i class="fa fa-search"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-products tab-content">

            <!-- List -->
            <div id="list" class="tab-pane active">
                <div class="product">
                    <div class="item">
                        @foreach($bieumau as $key=>$bm)
                        <div class="content-right diemtin product" style="color: black">

                            <p><i class="fa fa-file"></i>&emsp; {{$bm->TEN_BMCCV}}
                            </p>

                            <div class="price font-600 color-default">
                                <span style="color: #9f6605">{{date('d/m/Y',strtotime($bm->NGAYDANG_BMCCV))}}</span>
                            </div>
                            <div class="button d-flex align-items-center">
                                <a class="btn view button-main" href="{{asset('public/upload'.$bm->FILE_BMCCV)}}" target="_blank">
                                    Tải về
                                    <i class="fa fa-chevron-double-left"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>

        <div class="phantrang">
            {{ $bieumau->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>


@endsection