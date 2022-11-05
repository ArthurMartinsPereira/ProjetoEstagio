<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Solicitações;
use \Carbon\Carbon;
/*use App\Models\User;*/

class SolicitaçõesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index10()
    {

            $data10 = DB::table('solicitações')->where('Estado', 'Processando')
            ->orderBy('created_at', 'desc')->get();
            return view('GerenciarSolicitações',['data10'=>$data10]);

    }

    public function index11()
    {

            $data11 = DB::table('solicitações')
            ->orderBy('created_at', 'desc')->get();
            return view('GerenciarSolicitaçõesExtra',['data11'=>$data11]);

    }
    public function notify()
    {

    }


    public function create()
    {
       /* return view('AgendaLab-01.create');    */
    }

    public function show($id)
    {
        //
    }


    public function edit(Solicitações $solicitações, $id){
        $solic = Solicitações::find($id);
        if(!empty($solic)){
            $data10 = DB::table('solicitações')->where('id',$id)->get();
            return view('Gerente.Resposta', compact('solicitações', 'solic'),['data10'=>$data10]);
        }
       else{
         return redirect('GerenciarSolicitações');
       }
    }

    public function edit2(Solicitações $solicitações, $id){
        $solic = Solicitações::find($id);
        if(!empty($solic)){
            $data11 = DB::table('solicitações')->where('id',$id)->get();
            return view('Gerente.Resposta2', compact('solicitações', 'solic'),['data11'=>$data11]);
        }
       else{
         return redirect('GerenciarSolicitaçõesExtra');
       }
    }

    public function update(Request $request, $id)
    {
        $data12 = [
            'Estado' => $request->Estado,

        ];
        Solicitações::where('id',$id)->update($data12);

        return redirect('GerenciarSolicitações')->with('resposta', 'Resposta Enviada!');
    }



    public function update2(Request $request, $id)
    {
        $data13 = [
            'Estado' => $request->Estado,

        ];
        Solicitações::where('id',$id)->update($data13);

        return redirect('GerenciarSolicitaçõesExtra')->with('resposta2', 'Resposta Enviada!');
    }


    public function store(Request $request)
    {
         $this->validate($request,[
            'laboratório' => 'required',
            'Dia' => 'required',
            'Horário' => 'required',
            'Professor' => 'required',
            'Estado' => 'required'
        ]);
        $soli = new Solicitações;

        $soli->Laboratório = $request->input('laboratório');
        $soli->Dia = $request->input('Dia');
        $soli->Horário = $request->input('Horário');
        $soli->Professor = $request->input('Professor');
        $soli->Estado = $request->input('Estado');

        $soli->save();

        return redirect('/AgendaLab-01')->with('concluído', 'Solicitação Enviada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
