<?php

namespace App\Http\Controllers\Colaborador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        return view('colaborador.index');
    }
}
