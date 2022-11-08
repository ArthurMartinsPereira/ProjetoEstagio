<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laboratórios;
use App\Models\Solicitações;


class LabsGerenteController extends Controller
{
    function index()
    {
        $data = DB::table('laboratórios')->where('id',1)->get();
        return view('LabGerente-01',['data'=>$data]);
    }
    function index2()
    {
        $data2 = DB::table('laboratórios')->where('id',2)->get();
        return view('LabGerente-02',['data2'=>$data2]);
    }

    function index3()
    {
        $data3 = DB::table('laboratórios')->where('id',3)->get();
        return view('LabGerente-03',['data3'=>$data3]);
    }

    function index4()
    {
        $data4 = DB::table('laboratórios')->where('id',4)->get();
        return view('LabGerente-04',['data4'=>$data4]);
    }

    function index5()
    {
        $data5 = DB::table('laboratórios')->where('id',5)->get();
        return view('LabGerente-05',['data5'=>$data5]);
    }

    function index6()
    {
        $data6 = DB::table('laboratórios')->where('id',6)->get();
        return view('LabGerente-06',['data6'=>$data6]);
    }
    function index7()
    {
        $data7 = DB::table('laboratórios')->where('id',7)->get();
        return view('LabGerente-07',['data7'=>$data7]);
    }
    function index8()
    {
        $data8 = DB::table('laboratórios')->where('id',8)->get();
        return view('LabGerente-08',['data8'=>$data8]);

    }

    function index9()
    {
        $data9 = DB::table('laboratórios')->get();
        return view('Gerente.Index',['data9'=>$data9]);

    }

    public function index10(){
        return view('Gerente.InfoLabs',
        [ 'laboratórios' =>Laboratórios::paginate(50) ]
    );

    }

    function index11()
    {
        $data11 = DB::table('laboratórios')->get();
        return view('LabsAgendaGerente',['data11'=>$data11]);
    }



    function index12(Laboratórios $laboratórios, $id)
    {
        $labAg = Laboratórios::find($id);
        if(!empty($labAg)){
        $data12 = DB::table('laboratórios', 'solicitações')->where('id',$id)->get();

        $Agenda = Solicitações::join('laboratórios', 'laboratórios.NomeLab', '=', 'solicitações.laboratório')
        ->where('laboratórios.id', $id)->where('solicitações.Estado', 'Aceita')->orderBy('Dia', 'desc')->get();

        return view('LabsAgendaInfo',
        compact('laboratórios', 'labAg', 'Agenda'),
        ['data12'=>$data12]);
        }
        else{
            return redirect('LabsAgendaGerente');
          }
    }

/* Tela dos Professores para Agenda Dos Laboratórios*/
    function index13(Laboratórios $laboratórios, $id)
    {
        $labAg = Laboratórios::find($id);
        if(!empty($labAg)){
        $data13 = DB::table('laboratórios', 'solicitações')->where('id',$id)->get();

        $Agenda = Solicitações::join('laboratórios', 'laboratórios.NomeLab', '=', 'solicitações.laboratório')
        ->where('laboratórios.id', $id)->where('Professor',auth()->user()->name)->where('solicitações.Estado', 'Aceita')->orderBy('Dia', 'desc')->get();

        return view('LabsProfAgenda',
        compact('laboratórios', 'labAg', 'Agenda'),
        ['data13'=>$data13]);
        }
        else{
            return redirect('LabsAgenda');
          }
    }
    /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        function store(Request $request){

            $laboratórios = new Laboratórios;
            $laboratórios->NomeLab = $request->input('NomeLab');
            $laboratórios->NumLugares = $request->input('NumLugares');
            $laboratórios->NumComputadores = $request->input('NumComputadores');
            $laboratórios->InformaçõesAdicionais = $request->input('InformaçõesAdicionais');
            $laboratórios->save();

            return redirect('LabsGerente')->with('success', 'Laboratório Criado!');

    }


    public function edit(Laboratórios $laboratórios, $id){
        $labEd = Laboratórios::find($id);
        if(!empty($labEd)){
            $data11 = DB::table('laboratórios')->where('id',$id)->get();
            return view('Gerente.Editar', compact('laboratórios', 'labEd'),['data11'=>$data11]);
        }
       else{
         return redirect('Gerente.InfoLabs');
       }
    }


    public function update(Request $request, $id){
        $data12 = [
            'Nomelab' => $request->NomeLab,
            'NumLugares' => $request->NumLugares,
            'NumComputadores' => $request->NumComputadores,
            'InformaçõesAdicionais' => $request->InformaçõesAdicionais,
        ];
        Laboratórios::where('id',$id)->update($data12);

        return redirect('LabsGerente')->with('success', 'Alteração Concluida!');
    }


}

