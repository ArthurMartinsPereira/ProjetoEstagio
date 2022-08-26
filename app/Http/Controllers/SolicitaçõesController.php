<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Solicitações;
/*use App\Models\User;*/

class SolicitaçõesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* {
            $data9 = DB::table('solicitações')->where('Professor',Auth::user()->name)->get();
            return view('Solicitações',['data9'=>$data9]);
        }  */
    }

    public function notify()
    {

    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* return view('AgendaLab-01.create');    */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
