<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Solicitações;


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
    function index7()
    {
        $data7 = DB::table('laboratórios')->where('id',7)->get();
        return view('Lab-07',['data7'=>$data7]);
    }
    function index8()
    {
        $data8 = DB::table('laboratórios')->where('id',8)->get();
        return view('Lab-08',['data8'=>$data8]);
    }

    public function index9()
    {

            $data9 = DB::table('solicitações')->where('Professor',auth()->user()->name)
            ->orderBy('created_at', 'desc')->get();
            return view('Solicitações',['data9'=>$data9]);

    }

    public function index10()
    {

            $data10 = DB::table('solicitações')
            ->orderBy('created_at', 'desc')->get();
            return view('GerenciarSolicitações',['data10'=>$data10]);

    }

    function create(){

        return view('AgendaLab-01.create');
    }


       /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        function store(Request $request){

            $solicitação = new Solicitações;
            $solicitação->laboratório = $request->input('laboratório');
            $solicitação->Professor = $request->input('Professor');
            $solicitação->Dia = $request->input('Dia');
            $solicitação->Horário = $request->input('Horário');
            $solicitação->Estado = $request->input('Estado');
            $solicitação->save();

            return redirect('calendar')->with('solicitação', 'Solicitação Enviada!');
            return response()->json([  'success' => true, 'Solicitação Enviada!']);

    }

}

