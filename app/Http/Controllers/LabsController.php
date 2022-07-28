<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabsController extends Controller
{
    //
    function index()
    {
        $data = DB::table('laboratórios')->where('id',1)->get();
        return view('Lab-01',['data'=>$data]);
    }

    function index2()
    {
        $data2 = DB::table('laboratórios')->where('id',2)->get();
        return view('Lab-02',['data2'=>$data2]);
    }

    function index3()
    {
        $data3 = DB::table('laboratórios')->where('id',3)->get();
        return view('Lab-03',['data3'=>$data3]);
    }

    function index4()
    {
        $data4 = DB::table('laboratórios')->where('id',4)->get();
        return view('Lab-04',['data4'=>$data4]);
    }

    function index5()
    {
        $data5 = DB::table('laboratórios')->where('id',5)->get();
        return view('Lab-05',['data5'=>$data5]);
    }

    function index6()
    {
        $data6 = DB::table('laboratórios')->where('id',6)->get();
        return view('Lab-06',['data6'=>$data6]);
    }
}
