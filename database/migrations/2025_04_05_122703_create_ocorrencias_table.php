<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->id('id_ocorrencias');
            $table->char('servico_ocorrencias', length: 3);
            $table->date('data_ocorrencias');
            $table->char('atendida_ocorrencias', length: 1);
            $table->date('data_atendimento');
            $table->string('mensagem_ocorrencias', length: 1000);
            $table->foreignId('fk_ocorrencias');
            $table->foreign('fk_ocorrencias')->references('id_cliente')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocorrencias');
    }
};
