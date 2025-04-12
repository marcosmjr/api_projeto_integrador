<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
         return [
            'nome_cliente' => $this->nome_cliente,
            'sobrenome_cliente' => $this->sobrenome_cliente,
            'rua_cliente' => $this->rua_cliente,
            'bairro_cliente'=>$this->bairro_cliente,
            'numero_cliente'=>$this->numero_cliente,
            'cidade_cliente'=>$this->cidade_cliente,
            'estado_cliente'=>$this->estado_cliente,
            'telefone_cliente'=>$this->telefone_cliente,
            'whatsapp_cliente'=>$this->whatsapp_cliente,
            'email_cliente'=>$this->email_cliente,
            'preferencia_cliente'=>$this->preferencia_cliente,
            'nome_empresa_cliente'=>$this->nome_empresa_cliente
         ];
    }
}

