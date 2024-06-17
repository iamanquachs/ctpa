<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|*/

$a = url()->current();
// KHACH HANG
Route::get('/', 'App\Http\Controllers\HomeController@index');
// kien thuc y duoc

Route::get('kien-thuc-y-duoc', 'App\Http\Controllers\HomeController@kienthucyduoc');
Route::get('chi-tiet-ktyd/{ID_KTYD}', 'App\Http\Controllers\KienthucyduocController@show_ChiTietKTYD');
// lien diem tin
Route::any('diem-tin', 'App\Http\Controllers\HomeController@diemtin');
Route::get('chi-tiet-diem-tin/{ID_DT}', 'App\Http\Controllers\DiemTinController@show_ChiTietDT');

Route::get('chuyen-muc-tin-tuc/{ID_CHUYENMUC_DT}', 'App\Http\Controllers\HomeController@thongbao');
Route::get('chi-tiet-thong-bao/{ID_DT}', 'App\Http\Controllers\DiemTinController@show_ChiTietTB');
Route::get('chuyen-doi-cong-chung/{ID_DT}', 'App\Http\Controllers\ChuyenDoiCongChungController@show_chuyendoicongchung');

// trang khach hang - trang chu (frontend)
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');

// gioi thieu chung
Route::get('/gioi-thieu-chung', 'App\Http\Controllers\HomeController@gioithieuchung');
Route::get('/to-duoc-si-huu-tri', 'App\Http\Controllers\HomeController@toduocsihuutri');
Route::get('/to-duoc-lam-sang', 'App\Http\Controllers\HomeController@toduoclamsang');
Route::get('/to-cong-tac-xa-hoi', 'App\Http\Controllers\HomeController@tocongtacxahoi');
Route::get('/to-hau-can', 'App\Http\Controllers\HomeController@tohaucan');
Route::get('/to-truyen-thong-su-kien', 'App\Http\Controllers\HomeController@totruyenthongsukien');
Route::get('/co-van-phap-luat', 'App\Http\Controllers\HomeController@covanphapluat');

// so do to chuc
Route::get('so-do-to-chuc', 'App\Http\Controllers\HomeController@sodo');

// quyet dinh thanh lap
Route::get('quyet-dinh-thanh-lap', 'App\Http\Controllers\HomeController@quyetdinh');

// quyet dinh thanh lap
Route::get('dieu-le', 'App\Http\Controllers\HomeController@dieule');

// lien he
Route::get('lien-he', 'App\Http\Controllers\HomeController@lienhe');
Route::post('ykiendonggop', 'App\Http\Controllers\HomeController@ykiendonggop');



//
Route::get('chuyen-muc-diem-tin/{ID_CHUYENMUC_DT}', 'App\Http\Controllers\DiemTinController@show_ChuyenMucDT');

//

// van ban
Route::get('van-ban', 'App\Http\Controllers\HomeController@vanban');

Route::get('chuyen-muc-van-ban/{ID_CHUYENMUC_VB}', 'App\Http\Controllers\VanBanController@show_ChuyenMucVB');

Route::get('chi-tiet-van-ban/{ID_VB}', 'App\Http\Controllers\VanBanController@show_ChiTietVB');

// phap luat
Route::get('thong-tin-y-duoc', 'App\Http\Controllers\HomeController@phapluat');
Route::get('van-ban-hiep-hoi', 'App\Http\Controllers\HomeController@vanbanhiephoi');

Route::get('chuyen-muc-phap-luat/{ID_CHUYENMUC_PL}', 'App\Http\Controllers\PhapLuatController@show_ChuyenMucPL');

Route::get('chi-tiet-phap-luat/{ID_PL}', 'App\Http\Controllers\PhapLuatController@show_ChiTietPL');

// hoi vien
Route::get('danh-sach-vpcc', 'App\Http\Controllers\HomeController@vpcc');

Route::get('chi-tiet-gxn/{id_hocvien}', 'App\Http\Controllers\HoiVienController@chitietgxn');

Route::get('hv', 'App\Http\Controllers\HomeController@hoivien');
Route::get('hv/{ID_HV}', 'App\Http\Controllers\HoiVienController@chitiethoivien');
Route::get('/dangky-hocvien', 'App\Http\Controllers\HomeController@dangkyhocvien');
Route::post('/dangky-thamgia', 'App\Http\Controllers\HomeController@dangkythamgia');

// y kien dong gop
Route::post('/y-kien-dong-gop', 'App\Http\Controllers\HomeController@ykiendonggop');

// tim kiem
Route::post('/tim-kiem', 'App\Http\Controllers\HomeController@timkiem');
Route::post('/tim-kiem-hoi-vien', 'App\Http\Controllers\HomeController@timkiemhoivien');

// dang ky nhan tin
Route::post('/dang-ky-nhan-tin', 'App\Http\Controllers\HomeController@dknhantin');


// thu vien
Route::get('thu-vien', 'App\Http\Controllers\HomeController@thuvien');

//  bieu mau
Route::get('bieu-mau', 'App\Http\Controllers\HomeController@bieumau');

Route::get('chuyen-muc-thu-vien/{ID_CHUYENMUC_PL}', 'App\Http\Controllers\HomeController@video');

// tim iem
Route::post('/tim-kiem-van-ban', 'App\Http\Controllers\VanBanController@timkiemvanban');


Route::post('/tim-kiem-phap-luat', 'App\Http\Controllers\PhapLuatController@timkiem');


Route::post('/tim-kiem-bieu-mau', 'App\Http\Controllers\HoiVienController@timkiem');


//admin
Route::get('/admin', 'App\Http\Controllers\AdminController@dieuhuong');
Route::get('/login', 'App\Http\Controllers\HoiVienController@login');

// Route::post('/cookie', 'App\Http\Controllers\HoiVienController@getCookie');
