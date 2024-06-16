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

class ChuyenDoiCongChungController extends Controller
{

    public function show_chuyendoicongchung($ID_DT)
    {
        $chuyenmucvanban = DB::table('chuyenmucvanban')->orderby('ID_CHUYENMUC_VB', 'desc')->get();

        $lienket = DB::table('lienketwebsite')->get();
        $chuyendoicongchung = DB::table('chuyendoicongchung')
            ->where('ID_DT', $ID_DT)
            ->get();
        $lienquan = DB::table('chuyendoicongchung')->where('ID_DT', 'not like', $ID_DT)->orderby('ID_DT', 'desc')->limit(5)->get();

        return view('page.ChuyenDoiCongChung.chuyendoicongchung')->with('chuyendoicongchung', $chuyendoicongchung)->with('chuyenmucvanban', $chuyenmucvanban)->with('lienket', $lienket)->with('lienquan', $lienquan);
    }
}
