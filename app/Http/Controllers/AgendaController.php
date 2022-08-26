<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    //Agendas
    function index()
    {
        return view('AgendaLab-01');
    }
}
