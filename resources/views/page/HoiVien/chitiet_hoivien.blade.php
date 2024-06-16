@extends('welcome_hoivien')
@section('content')



<div class="page-top" style="padding-bottom: 0px;">
</div>


<div class="section about" style="overflow-x: hidden; margin: 0;">
    <div class="container" style="
    padding-bottom: 40px;
">
        <div class="section main-contact-us">
            <div>
                <div style="text-align: center;">
                    @foreach($hoivien as $key=>$hv)
                    <div style="padding-bottom: 10px;">
                        <div class="chitiet_vpcc_img">
                            <img style="max-width: 100%;
  border-radius: 50%;
  height: 15em;
  width: 15em;" src="{{($hv->ANH_HV!=''?URL::to('public/upload'.$hv->ANH_HV):URL::to('public/frontend/img/hoivien_item.png'))}}">
                        </div>

                    </div>
                    <div>
                        <div class="page-title color">
                            <div class="title title-icon">
                                <div class="row">
                                    <div class="col-12 " style="padding-right: 0;display: flex;justify-content: center;text-align: left;">
                                        <table class="table_chitiethoivien">
                                            <tbody>

                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000; font-size: 20px;">Tên hội viên:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->TEN_HV}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Văn bằng chuyên môn: </h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->vanbang}} </h6>
                                                    </td>
                                                </tr>
                                                @if(Cookie::get('msdn'))
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Ngày sinh: </h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->ngaysinh}} </h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Địa chỉ:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->diachi}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Số điện thoại:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->dienthoai}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Email:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->email}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Số bảo hiểm y tế: </h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->soBHYT}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Số bảo hiểm xã hội:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->soBHXH}} </h6>
                                                    </td>
                                                </tr>
                                                <!-- <tr style="margin-top: 10px;border-top: #ddd solid 1px;">
                                                    <th>

                                                        <h4 style="color:green">Thông tin y tế</h4>
                                                    </th>
                                                </tr> -->
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Nhóm máu:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->nhommau}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">BMI:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->bmi}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Huyết áp:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->huyetap}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Dị ứng:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->diung}} </h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">Bệnh mãn tính:</h6>
                                                    </th>
                                                    <td>
                                                        <h6 style="margin: 0; color: #000;font-size: 20px">{{$hv->benhmantinh}} </h6>
                                                    </td>
                                                </tr>
                                                @else
                                                <div style="position: absolute; bottom: -40px;">

                                                    <p class="danhnhap_xemthem" onclick="document.getElementById('id01').style.display='block'" style="width:auto; padding-top: 20px; color: red;">Đăng nhập để xem thêm thông tin</p>
                                                </div>

                                                @endif
                                                <div style="position: absolute; bottom: -50px; margin-top: 20px; border-top: 1px solid #ddd; ">

                                                    <a href="https://www.ctpa.vn/public/upload/vanban/52cd54cfe0303a3143cb74da8fa85ce0.pdf" target="_blank" class="danhnhap_xemthem" style="width:auto; color: #1e551e; font-weight: 600;" onMouseOver="this.style.color='#1e551e'" onMouseOut="this.style.color='grey'">Điều lệ Hội Dược Học</a>
                                                </div>

                                            </tbody>

                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="header-contact" style="color: black">
                            <div class="col padding-0">
                                <div class="item d-flex">
                                    <div class="contact-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<div id="id01" class="modal">

    <form {{-- id="login" --}} class="modal-content animate" action="{{URL::to('/login')}}" method="get" style="max-width: 500px;">
        <div style='display: flex; justify-content: space-between; align-items: center; padding: 10px;'>
            <h3>Vui lòng xác thực</h3>
            <span style="width: 62px; position: relative; height: auto; right: 0;" onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <input hidden name="id_hv" id='id_hv'>
            <label for="uname"><b>Email</b></label>
            <input type="text" id="email" placeholder="Email" name="uname" required>

            <label for="psw"><b>MSHV</b></label>
            <input type="password" id='pass' placeholder="Mã số hội viên" name="psw" required>

            <button type="submit">Đăng nhập</button>
        </div>

    </form>
</div>

<script>
    //Set Cookie
    const path = window.location.pathname;
    const listPath = path.split('/')
    var id_hv = listPath[listPath.length - 1];
    document.querySelector('#id_hv').value = id_hv

    function setCookie() {
        const msdn = document.querySelector('#email').value
        document.cookie = `msdn= ${msdn}; path=/`;
    }
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>




@endsection