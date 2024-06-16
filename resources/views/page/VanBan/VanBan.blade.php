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
        <div class="page-title diemtin">
            <h2 class="title_main_red">VĂN BẢN</h2>
        </div>
        <div class="feature-products tab-content">

            <div id="list" class="tab-pane active">
                <div class="product">
                    <div class="item">
                        @foreach($vanban as $key=>$vb)
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="content-right diemtin" style="min-width: 100%; color: black;border-bottom: 1px solid #ddd;padding: 15px 0;">
                                    <a class="title">
                                        {{$vb->TIEUDE_VB}}</a>

                                    <div class="price font-600 color-default">
                                        <span style="color: #9f6605">{{date('d/m/Y',strtotime($vb->NGAYDANG_VB))}}</span>
                                    </div>
                                    <div class="button d-flex align-items-center">
                                        <a class="btn view button-main" target="_blank" href="{{asset('public/upload'.$vb->FILE_VB)}}">
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
            {{ $vanban->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>




@endsection