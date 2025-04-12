<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClienteResource;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Ocorrencia;
use Illuminate\Http\Request as HttpRequest;

class ClienteController extends Controller
{
    public function index(){
        //return [];

        //$cliente = Cliente::all();
        $cliente = Cliente::paginate();
        return ClienteResource::collection($cliente);
    }

    //para validação do arquivo StoreUpdateClienteRequest
    //trocar por public function store(StoreUpdateClienteRequest $request){
    public function store(HttpRequest $request){
        $data = $request->all();

        $cliente = Cliente::create($data);

        return new ClienteResource($cliente);
    }
}
