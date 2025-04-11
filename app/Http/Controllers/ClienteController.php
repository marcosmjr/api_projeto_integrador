<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClienteResource;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Ocorrencia;

class ClienteController extends Controller
{
    public function index(){
        //return [];

        //$cliente = Cliente::all();
        $cliente = Cliente::paginate();
        return ClienteResource::collection($cliente);
    }
}
