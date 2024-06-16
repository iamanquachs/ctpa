<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;  //Redirect :tra ve
use Illuminate\Support\Facades\Cookie;
// session_start();
use Auth;
use Toastr;

class HoiVienController extends Controller
{
    //
    public function chitietgxn($id_hocvien)
    {
        
       $lienket = DB::table('lienketwebsite')->get();

        $hocvien = DB::table('hocvien')
            ->where('hocvien.id_hocvien', $id_hocvien)
            ->get();
        $ten = DB::table('hocvien')
            ->where('hocvien.id_hocvien', $id_hocvien)
            ->limit(1)->get();

        return view('page.HoiVien.chitiet_gxn')->with('hocvien', $hocvien)
            ->with('ten', $ten)->with('lienket', $lienket);
    }

    public function chitiethoivien($ID_HV)
    {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

        $lienket = DB::table('lienketwebsite')->get();

        $hoivien = DB::table('hoivien')
            ->where('hoivien.ID_HV', $ID_HV)->where('trangthai', 0)
            ->get();
        $ten = DB::table('hoivien')
            ->where('hoivien.ID_HV', $ID_HV)
            ->limit(1)->get();

        return view('page.HoiVien.chitiet_hoivien')->with('hoivien', $hoivien)
            ->with('ten', $ten)->with('lienket', $lienket)->with('chuyenmucvanban', $chuyenmucvanban);
    }
    public function login(Request $request)
    {
        $uname = $request->uname;
        $psw = $request->psw;
        $id_hv = $request->id_hv;
        $login = DB::table('hoivien')
            ->where('hoivien.email', $uname)
            ->where('hoivien.ID_HV', $psw)
            ->get();

        if (count($login) === 1) {
            Cookie::queue('msdn', $uname, 45);
            return Redirect::to('hv/' . $id_hv);
        }
    }
    public function timkiem(Request $request)
    {
        $lienket = DB::table('lienketwebsite')->get();

        $tu_timkiem = $request->tu_timkiem;
        $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

        $timkiem_BM = DB::table('bieumauccv')->where('TEN_BMCCV', 'like', '%' . $tu_timkiem . '%')->get();


        return view('page.HoiVien.TimKiemBM')->with('timkiem_BM', $timkiem_BM)->with('chuyenmucvanban', $chuyenmucvanban)
            ->with('tu_timkiem', $tu_timkiem)->with('lienket', $lienket);
    }
}
