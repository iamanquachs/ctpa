<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;  //Redirect :tra ve
// session_start();

use Auth;
use Toastr;

class KienthucyduocController extends Controller
{


    /// khach hang
    public function show_ChuyenMucDT($ID_CHUYENMUC_DT)
    {
        $lienket = DB::table('lienketwebsite')->get();

        $chuyenmucdiemtin = DB::table('chuyenmucdiemtin')->orderby('ID_CHUYENMUC_DT', 'desc')->get();
        $danhmuc = DB::table('diemtin')
            ->join('chuyenmucdiemtin', 'chuyenmucdiemtin.ID_CHUYENMUC_DT', '=', 'diemtin.ID_CHUYENMUC_DT')
            ->where('chuyenmucdiemtin.ID_CHUYENMUC_DT', $ID_CHUYENMUC_DT)
            ->get();

        $chuyenmuc_ten = DB::table('chuyenmucdiemtin')

            ->where('chuyenmucdiemtin.ID_CHUYENMUC_DT', $ID_CHUYENMUC_DT)
            ->limit(1)->get();


        return view('page.DiemTin.CM_DiemTin')->with('chuyenmuc_ten', $chuyenmuc_ten)
            ->with('chuyenmucdiemtin', $chuyenmucdiemtin)->with('danhmuc', $danhmuc)->with('lienket', $lienket);
    }

    public function show_ChiTietKTYD($ID_KTYD)
    {
    $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

        $lienket = DB::table('lienketwebsite')->get();

        $kienthucyduoc = DB::table('kienthucyduoc')
            ->where('kienthucyduoc.ID_KTYD', $ID_KTYD)
            ->get();
        $chuyenmuc_ten = DB::table('kienthucyduoc')
            ->where('kienthucyduoc.ID_KTYD', $ID_KTYD)
            ->limit(1)->get();
        // diem tin lien quan

        foreach ($kienthucyduoc as $key => $value) {
        }
        $KTYD_lienquan = DB::table('kienthucyduoc')
            ->limit(5)->get();

        return view('page.KienThucYDuoc.chitiet_KTYD')->with('kienthucyduoc', $kienthucyduoc)->with('lienket', $lienket)
            ->with('KTYD_lienquan', $KTYD_lienquan)->with('chuyenmucvanban', $chuyenmucvanban);
    }
}
