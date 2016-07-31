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

    public function goPageRealizarTransferencia()
    {
        return view('transferencia.realizarTransferencia');
    }
}
