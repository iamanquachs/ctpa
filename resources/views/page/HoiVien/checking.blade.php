@extends('welcome_hoivien')
@section('content')

<style>
    .container{
        margin: 10px auto
    }
    .body_dangky{
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        width: 50%;
    }
    .form_dangky{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        color: #000;
        margin-bottom: 20px
    }
    .form_dangky h6{
        text-align: start
    }
    .form_dangky span{
        color: red
    }
    .form_dangky input[type='date'],input[type='text'],input:not([type]){
        border:none;
        border-bottom: 1px solid #ddd;
        width:100%;
    }
    .form_dangky .other{
        display: flex;
        justify-content: flex-start;
        width: 100%;
        white-space: nowrap;
        gap:10px;
        align-items: center
    }
    .form_dangky .other label{
        margin: 0
    }
    .form_dangky .other input{
        border:none;
        border-bottom: 1px solid #ddd;
        padding: 10px;
        margin: 0

    }
    .btn_send{
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        width: 70%;
    }
    .btn_send button{
        width: 80px;
        border-radius: 10px;
        padding:10px
    }
    .title_h5{
        background-repeat: no-repeat;
        background-position: center bottom;
        background-size: auto;
        margin-bottom: 0;
        color: #282828;
        font-weight: 600;
        font-size: 25px;
        font-family: "FontAwesome";
    }
</style>

<div class="page-title-breadcrumbs">
    <div class="breadcrumbs-container container">
        <div class="breadcrumbs_wrapper">
        </div>
    </div>
</div>
<div style="background-color: rgb(217, 239, 237)">
    <div class="section_hoivien">
        <div class="container">
            <form method="POST" action="{{URL::to('/diemdanh')}}">
                {{csrf_field()}}
                <div class="content-about text-center container" style='display:flex;flex-direction: column; align-items: center;'>
                    <div class="title title-icon header_hoivien">
                        <h4 class="title_h5">ĐIỂM DANH ĐẾN LỚP CẬP NHẬT KIẾN THỨC CHUYÊN MÔN VỀ DƯỢC – CẦN THƠ</h4>
                    </div>
                        <div class="input-group" style="margin-top: 10px;">
                            <input style="margin-top: 0px;" class="search-query form-control" type="text" name="dienthoai" placeholder="Nhập số điện thoại" value="" autocomplete="off">
                            <div class="input-group-btn" style="background-color: #1e551e; border-top-right-radius:5px; border-bottom-right-radius:5px">
                                <button type="submit" name="submit_search" class="btn button btn-default float-right" style="background-color: #1e551e; border-top-right-radius:5px; border-bottom-right-radius:5px">Gửi</button>
                            </div>
                        </div>
                </div>
            </form>

        </div>
    </div>
</div>
<div id="id01" class="modal">

    <form {{-- id="login" --}} class="modal-content animate"  style="max-width: 500px;">
        <div style='display: flex; justify-content: space-between; align-items: center; padding: 10px;color:#1e551e'>
            <h3>Điểm danh thành công</h3>
        </div>

        <div class="container">
            <button type="submit" onclick="document.getElementById('id01').style.display='none'" >Đóng</button>

        </div>

    </form>
</div>
<script>
    function _ChangeFormat(e) {
            var number = $(e).val().replace(/[.]/g, "");
            number = $(e)
                .val()
                .replace(/[.]/g, "")
                .toString();
            $(e).val(number.replace(/[^0-9]/g, ""));
        }
</script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');
    const queryString = window.location.search;
    if(queryString == '?success'){
        modal.style.display = "block";
    }
</script>


@endsection