<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->id('id_cliente');
            $table->string('nome_cliente', length: 10)->nullable();
            $table->string('sobrenome_cliente', length: 20)->nullable();
            $table->string('rua_cliente', length: 50)->nullable();
            $table->string('bairro_cliente', length: 40)->nullable();
            $table->string('numero_cliente', length: 5)->nullable();
            $table->string('cidade_cliente', length: 40)->nullable();
            $table->char('estado_cliente', length: 2)->nullable();
            $table->string('telefone_cliente', length: 15);
            $table->string('whatsapp_cliente', length: 15)->nullable();
            $table->string('email_cliente', length: 50)->nullable();
            $table->char('preferencia_cliente', length: 3)->nullable();
            $table->string('nome_empresa_cliente', length: 50)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->rememberToken();
            //$table->timestamps();

        });

       /* Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });*/
    }

    /**
     * Reverse the migrations.
     */
   /* public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }*/
};
