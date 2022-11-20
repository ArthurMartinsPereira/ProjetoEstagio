<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $data = DB::table('users')->orderBy('name','ASC')->get();
        return view('Gerente.TelaUsuários',['data'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $users, $id){
        $UsEd = User::find($id);
        if(!empty($UsEd)){
            $data = DB::table('users')->where('id',$id)->get();
            return view('Gerente.EditarUsuários', compact('users', 'UsEd'),['data'=>$data]);
        }
       else{
         return redirect('GerenteUsuários');
       }
    }

    public function edit2(User $users){
        $UsEd = User::find($users);
        if(!empty($UsEd)){
            $data = DB::table('users')->where('id', 1)->get();
            return view('Gerente.GerenteId1', compact('users', 'UsEd'),['data'=>$data]);
        }
       else{
         return redirect('home');
       }
    }


    public function update(Request $request, $id){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'curso' => $request->curso,
            'telefone' => $request->telefone,
            'Admin' => $request->Admin,
        ];
        User::where('id',$id)->update($data);

        return redirect('GerenteUsuários')->with('success', 'Alteração Concluida!');
    }


    public function update2(Request $request, $id){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'curso' => $request->curso,
            'telefone' => $request->telefone,
            'Admin' => $request->Admin,
        ];
        User::where('id',$id)->update($data);

        return redirect('home');
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
