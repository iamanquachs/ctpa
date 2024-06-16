@extends('welcome')
@section('content')



<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
        </div>
    </div>
</div>


<div class="section">
    <div class="section_hoivien">
        <div class="title text-center">
            <div class="page-title color">
            </div>
        </div>
        <div class="content-about text-center container">
            <div class="title title-icon header_hoivien">
                
                <h2 class="title-h2">HỘI VIÊN ({{count($hoivien)}})</h2>
                <form action="{{URL::to('/tim-kiem-hoi-vien')}}" method="post">
                    {{csrf_field()}}
                    <div class="input-group">
                        <input style="margin-top: 0;" class="search-query form-control" type="text" name="ten_hoivien" placeholder="Nhập từ tìm kiếm" value="" autocomplete="off">
                        <div class="input-group-btn" style="background-color: #1e551e; border-top-right-radius:5px; border-bottom-right-radius:5px">
                            <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e; border-top-right-radius:5px; border-bottom-right-radius:5px">Tìm</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                @foreach($hoivien as $key=>$hv)
                <div class="col-sm-4 col-12">
                    <div class="item">
                        <a href="{{URL::to('/hv/'.$hv->ID_HV)}}">
                            <div class="hoivien_img_daidien">
                                <img class="img-fluid img_hoivien" src="{{($hv->ANH_HV!=''?URL::to('public/upload'.$hv->ANH_HV):URL::to('public/frontend/img/hoivien_item.png'))}}" alt="img">
                            </div>
                            <div class="item-content">
                                <div class="sub-title">
                                    <h3>{{mb_strtoupper($hv->TEN_HV)}}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </div>
</div>




@endsection