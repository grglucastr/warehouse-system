<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TransferenciaWarehouseController extends Controller
{
    public function index()
    {
        return view('transferencia.index');
    }

    public function goPageRealizarTransferenciaStage1()
    {
        return view('transferencia.realizarTransferenciaStage1');
    }

    public function goPageRealizarTransferenciaStage2()
    {
        return view('transferencia.realizarTransferenciaStage2');
    }

    public function postTransferenciaStage1(Request $request)
    {
        switch($request->get('acao'))
        {
            case 'forward':
                return redirect('/realizar-transferencia-stage-2');

            case 'save':
                return back()->withInput();

        }

    }
}
