<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;   //Redirect :tra ve
use Toastr;

// session_start();

use Mail;


class HomeController extends Controller
{

  // trang chu
  public function index()
  {
    $active_home = 'menu_active';
    $kienthucyduoc1 = DB::table('kienthucyduoc')->orderby('ID_KTYD', 'desc')->limit(1)->get();
    $kienthucyduoc = DB::table('kienthucyduoc')->orderby('ID_KTYD', 'desc')->offset(1)->limit(3)->get();

    $diemtin1 = DB::table('diemtin')->where('ID_CHUYENMUC_DT', 1)->orderby('ID_DT', 'desc')->limit(1)->get();
    $diemtin = DB::table('diemtin')->where('ID_CHUYENMUC_DT', 1)->orderby('ID_DT', 'desc')->offset(1)->limit(3)->get();
    $thongbao = DB::table('diemtin')->where('ID_CHUYENMUC_DT', 2)->orderby('ID_DT', 'desc')->limit(1)->get();
    $thongbao2 = DB::table('diemtin')->where('ID_CHUYENMUC_DT', 2)->orderby('ID_DT', 'desc')->offset(1)->limit(3)->get();

    $chuyendoicongchung = DB::table('chuyendoicongchung')->orderby('ID_DT', 'desc')->get();

    $vanban = DB::table('vanban')->orderby('ID_VB', 'desc')->limit(4)->get();
    $vanban_all = DB::table('vanban')->get();

    $vanbanhiephoi = DB::table('vanbanhiephoi')->orderby('ID_PL', 'desc')->limit(4)->get();
    $vanbanhiephoi_all = DB::table('vanbanhiephoi')->get();


    $phapluat = DB::table('phapluat')->orderby('NGAY_HIEULUC', 'desc')->limit(4)->get();
    $phapluat_all = DB::table('phapluat')->get();
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();


    $vpcc = DB::table('vanphongcongchung')
      ->orderby('NGAYTHANHLAP_VPCC', 'asc')
      ->get();
    $vpcc_top9 = DB::table('vanphongcongchung')
      ->orderby('NGAYTHANHLAP_VPCC', 'asc')->limit(9)
      ->get();
    $hoivien = DB::table('hoivien')->get();
    $hoivien_top9 = DB::table('hoivien')
      ->orderby('ID_HV', 'asc')->limit(9)
      ->get();

    $lienket = DB::table('lienketwebsite')->get();


    return view('page.home')->with('kienthucyduoc1', $kienthucyduoc1)->with('kienthucyduoc', $kienthucyduoc)->with('diemtin', $diemtin)->with('thongbao', $thongbao)->with('thongbao2', $thongbao2)->with('diemtin1', $diemtin1)
      ->with('phapluat', $phapluat)->with('vanban', $vanban)->with('chuyenmucvanban', $chuyenmucvanban)
      ->with('vpcc', $vpcc)->with('vpcc_top9', $vpcc_top9)->with('hoivien_all', $hoivien)->with('hoivien_top9', $hoivien_top9)->with('lienket', $lienket)->with('active_home', $active_home)->with('chuyendoicongchung', $chuyendoicongchung)->with('vanbanhiephoi', $vanbanhiephoi)->with('phapluat_all', $phapluat_all)->with('vanban_all', $vanban_all)->with('vanbanhiephoi_all', $vanbanhiephoi_all);
  }

  public function gioithieuchung()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_gioithieuchung = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.GioiThieuChung')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_gioithieuchung', $active_gioithieuchung);
  }
  public function toduocsihuutri()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_duocsihuutri = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.ToDuocSiHuuTri')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_duocsihuutri', $active_duocsihuutri);
  }
  public function toduoclamsang()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_duoclamsang = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.ToDuocLamSang')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_duoclamsang', $active_duoclamsang);
  }
  public function tocongtacxahoi()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_congtacxahoi = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.ToCongTacXaHoi')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_congtacxahoi', $active_congtacxahoi);
  }
  public function tohaucan()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_haucan = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.ToHauCan')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_haucan', $active_haucan);
  }
  public function totruyenthongsukien()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_truyenthongsukien = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.ToTruyenThongSuKien')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_truyenthongsukien', $active_truyenthongsukien);
  }
  public function covanphapluat()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_covanphapluat = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.covanphapluat')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_covanphapluat', $active_covanphapluat);
  }
  public function sodo()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_sodo = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.SoDoToChuc')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_sodo', $active_sodo);
  }

  public function quyetdinh()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_quyetdinh = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.GioiThieu.QuyetDinhThanhLap')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_quyetdinh', $active_quyetdinh);
  }

  public function dieule()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_gioithieu = 'menu_active';
    $active_dieule = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();

    return view('page.GioiThieu.DieuLe')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_gioithieu', $active_gioithieu)->with('active_dieule', $active_dieule);
  }

  public function lienhe()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_lienhe = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.LienHe.LienHe')->with('lienket', $lienket)->with('active_lienhe', $active_lienhe)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  public function diemtin()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_diemtin = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $chuyenmucdiemtin = DB::table('chuyenmucdiemtin')->orderby('ID_CHUYENMUC_DT', 'desc')->get();

    $diemtin = DB::table('diemtin')->where('ID_CHUYENMUC_DT', '1')->orderby('ID_DT', 'desc')->paginate(5);
    return view('page.DiemTin.DiemTin')->with('chuyenmucdiemtin', $chuyenmucdiemtin)
      ->with('diemtin', $diemtin)->with('lienket', $lienket)->with('active_diemtin', $active_diemtin)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  public function thongbao($ID_CHUYENMUC_DT)
  {
    $lienket = DB::table('lienketwebsite')->get();

    $chuyenmucdiemtin = DB::table('chuyenmucdiemtin')->orderby('ID_CHUYENMUC_DT', 'asc')->get();
    $chuyenmucvb = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $thongbao = DB::table('diemtin')
      ->join('chuyenmucdiemtin', 'chuyenmucdiemtin.ID_CHUYENMUC_DT', '=', 'diemtin.ID_CHUYENMUC_DT')
      ->where('chuyenmucdiemtin.ID_CHUYENMUC_DT', $ID_CHUYENMUC_DT)
      ->orderby('ID_DT', 'desc')->paginate(12);
    $chuyenmuc_ten = DB::table('chuyenmucdiemtin')
      ->where('chuyenmucdiemtin.ID_CHUYENMUC_DT', $ID_CHUYENMUC_DT)
      ->limit(1)->get();

    return view('page.DiemTin.ThongBao')->with('chuyenmucdiemtin', $chuyenmucdiemtin)
      ->with('thongbao', $thongbao)->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvb)
      ->with('chuyenmuc_ten', $chuyenmuc_ten);
  }

  public function kienthucyduoc()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_ktyd = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $kienthucyduoc = DB::table('kienthucyduoc')->orderby('ID_KTYD', 'desc')->paginate(5);
    return view('page.KienThucYDuoc.KTYD')->with('kienthucyduoc', $kienthucyduoc)->with('lienket', $lienket)->with('active_ktyd', $active_ktyd)->with('chuyenmucvanban', $chuyenmucvanban);
  }


  public function vanban()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_vanban = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $vanban = DB::table('vanban')->orderby('ID_VB', 'desc')->paginate(5);
    return view('page.VanBan.VanBan')->with('chuyenmucvanban', $chuyenmucvanban)
      ->with('vanban', $vanban)->with('lienket', $lienket)->with('active_vanban', $active_vanban)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  public function phapluat()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $lienket = DB::table('lienketwebsite')->get();
    $chuyenmucphapluat = DB::table('chuyenmucphapluat')->orderby('ID_CHUYENMUC_PL', 'desc')->get();

    $phapluat = DB::table('phapluat')->orderby('ID_PL', 'desc')->paginate(5);
    return view('page.PhapLuat.PhapLuat')->with('chuyenmucphapluat', $chuyenmucphapluat)->with('phapluat', $phapluat)->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  public function vanbanhiephoi()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $lienket = DB::table('lienketwebsite')->get();
    $phapluat = DB::table('vanbanhiephoi')->orderby('ID_PL', 'desc')->paginate(5);
    return view('page.VanBanHiepHoi.VanBanHiepHoi')->with('phapluat', $phapluat)->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  public function vpcc()
  {
    $active_hoivien_main = 'menu_active';
    $active_vpcc = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $vpcc_count = DB::table('vanphongcongchung')->get();
    $vpcc = DB::table('vanphongcongchung')->orderby('NGAYTHANHLAP_VPCC', 'asc')->paginate(12);
    return view('page.HoiVien.VPCC')->with('vpcc', $vpcc)->with('lienket', $lienket)->with('vpcc_count', $vpcc_count)->with('active_vpcc', $active_vpcc)->with('active_hoivien_main', $active_hoivien_main);
  }

  public function hoivien()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_hoivien_main = 'menu_active';
    $active_hoivien = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();


    $hoivien = DB::table('hoivien')->where('trangthai', 0)->orderby('ID_HV', 'asc')->get();
    return view('page.HoiVien.HoiVien')->with('hoivien', $hoivien)->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('active_hoivien_main', $active_hoivien_main)->with('active_hoivien', $active_hoivien);
  }
  public function checking()
  {
    $lienket = DB::table('lienketwebsite')->get();
    return view('page.HoiVien.checking')->with('lienket', $lienket);
  }

  public function diemdanh(Request $request)
  {
    DB::table('dangky_daotao')
      ->where('dienthoai', $request->dienthoai)
      ->update(['time_checked' =>  NOW(), 'checked' => '1']);
    return Redirect::to('/checking?success');
  }


  public function ykiendonggop()
  {
    return view('page.LienHe.ykiendonggop');
  }

  public function donggop(Request $request)
  {


    $data = array();
    $data['HOTEN_YKDG'] = $request->HOTEN_YKDG;
    $data['EMAIL_YKDG'] = $request->EMAIL_YKDG;
    $data['SDT_YKDG'] = $request->SDT_YKDG;
    $data['NOIDUNG_YKDG'] = $request->NOIDUNG_YKDG;


    $donggop = DB::table('ykiendonggop')->InsertGetId($data);
    Toastr::success('Bạn đã gửi ý kiến đóng góp thành công', 'Success',);
    return Redirect::to('lien-he');
  }

  public function dknhantin(Request $request)
  {

    $data = array();
    $data['email'] = $request->email;


    $dknhantin = DB::table('khach')->InsertGetId($data);
    Toastr::success('Bạn đã đăng ký nhận tin thành công', 'Success',);
    return Redirect::to('trang-chu');
  }


  // tim kiem
  public function timkiem(Request $request)
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $lienket = DB::table('lienketwebsite')->get();

    $tu_timkiem = $request->tu_timkiem;

    $timkiem_DT = DB::table('diemtin')->where('TIEUDE_DT', 'like', '%' . $tu_timkiem . '%')->get();


    return view('page.TimKiem')->with('timkiem_DT', $timkiem_DT)
      ->with('tu_timkiem', $tu_timkiem)->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  // tim kiem hoi vien
  public function timkiemhoivien(Request $request)
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $lienket = DB::table('lienketwebsite')->get();

    $ten_hoivien = $request->ten_hoivien;

    $timkiem_hv = DB::table('hoivien')->where('TEN_HV', 'like', '%' . $ten_hoivien . '%')->where('trangthai', 0)->get();


    return view('page.HoiVien.TimKiemHoiVien')->with('timkiem_hv', $timkiem_hv)
      ->with('ten_hoivien', $ten_hoivien)->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  // thu vien
  public function thuvien()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_thuvien = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();

    $chuyenmucthuvien = DB::table('chuyenmucthuvien')->orderby('ID_CHUYENMUC_TV', 'asc')->get();
    $thuvien = DB::table('thuvien')
      ->join('chuyenmucthuvien', 'chuyenmucthuvien.ID_CHUYENMUC_TV', '=', 'thuvien.ID_CHUYENMUC_TV')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', 1)
      ->orderby('ID_TV', 'desc')->paginate(12);
    return view('page.ThuVien.ThuVien')->with('chuyenmucthuvien', $chuyenmucthuvien)
      ->with('thuvien', $thuvien)->with('lienket', $lienket)->with('active_thuvien', $active_thuvien)->with('chuyenmucvanban', $chuyenmucvanban);
  }

  public function video($ID_CHUYENMUC_TV)
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $lienket = DB::table('lienketwebsite')->get();

    $chuyenmucthuvien = DB::table('chuyenmucthuvien')->orderby('ID_CHUYENMUC_TV', 'asc')->get();
    $thuvien = DB::table('thuvien')
      ->join('chuyenmucthuvien', 'chuyenmucthuvien.ID_CHUYENMUC_TV', '=', 'thuvien.ID_CHUYENMUC_TV')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
      ->orderby('ID_TV', 'desc')->paginate(12);
    $chuyenmuc_ten = DB::table('chuyenmucthuvien')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
      ->limit(1)->get();
    $chuyenmuc_ten = DB::table('chuyenmucthuvien')
      ->where('chuyenmucthuvien.ID_CHUYENMUC_TV', $ID_CHUYENMUC_TV)
      ->limit(1)->get();

    return view('page.ThuVien.Video')->with('chuyenmucthuvien', $chuyenmucthuvien)
      ->with('thuvien', $thuvien)->with('lienket', $lienket)
      ->with('chuyenmuc_ten', $chuyenmuc_ten)->with('chuyenmucvanban', $chuyenmucvanban);
  }


  public function bieumau()
  {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

    $active_hoivien_main = 'menu_active';
    $active_bieumau = 'menu_active';
    $lienket = DB::table('lienketwebsite')->get();
    $bieumau = DB::table('bieumauccv')->orderby('ID_BMCCV', 'desc')->paginate(5);

    return view('page.HoiVien.BieuMau')->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban)->with('bieumau', $bieumau)->with('active_hoivien_main', $active_hoivien_main)->with('active_bieumau', $active_bieumau);
  }
}
