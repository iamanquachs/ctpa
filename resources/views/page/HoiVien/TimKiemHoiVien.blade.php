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

        <h4 style="font-family: MYRIADPRO-LIGHT; color: #9f6605; margin-bottom: 2rem;">
            Có {{count($timkiem_hv)}} kết quả chứa từ khóa "{{$ten_hoivien}}"
        </h4>


        <div class="feature-products tab-content">

            <!-- List -->
            <div id="list" class="tab-pane active">
                <div class="product">
                    <div class="item">
                        <div class="content-about text-center container">
                            <div class="row">
                                @foreach($timkiem_hv as $key=>$hv)
                                <div class="col-sm-4 col-12">
                                    <div class="item" style="margin-bottom: 10px;">
                                        <a href="{{URL::to('/hv/'.$hv->ID_HV)}}">
                                            <div class="hoivien_img_daidien">
                                                <img class="img-fluid img_hoivien" src="{{($hv->ANH_HV!=''?URL::to('public/upload'.$hv->ANH_HV):URL::to('public/frontend/img/hoivien_item.png'))}}" alt="img">
                                            </div>
                                            <div class="item-content">
                                                <div class="sub-title">
                                                    <h3>{{mb_strtoupper($hv->TEN_HV)}}</h3>
                                                    <h3>{{$hv->VANPHONG_HV}}</h3>
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
            </div>
        </div>


    </div>
</div>




@endsection