<?php

namespace App\Http\Controllers;

use App\Http\Resources\OcorrenciaResource;
use App\Models\Ocorrencia;
use Illuminate\Http\Request as HttpRequest;

class OcorrenciaController extends Controller
{
    public function index(){

        $ocorrencia = Ocorrencia::paginate();
        return OcorrenciaResource::collection($ocorrencia);
    }

    public function store(HttpRequest $request){
        $data = $request->all();

        $ocorrencia = Ocorrencia::create($data);

        return new OcorrenciaResource($ocorrencia);
    }
}
