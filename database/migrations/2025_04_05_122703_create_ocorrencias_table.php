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
            $table->char('servico_ocorrencias', length: 3)->nullable();
            $table->date('data_ocorrencias')->nullable();
            $table->char('atendida_ocorrencias', length: 1)->nullable();
            $table->date('data_atendimento')->nullable();
            $table->string('mensagem_ocorrencias', length: 1000)->nullable();
            $table->foreignId('fk_ocorrencias')->nullable();
            $table->foreign('fk_ocorrencias')->references('id_cliente')->on('clientes');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

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
