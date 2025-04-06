<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_cliente'=>fake()->name_cliente(),
            'sobrenome_cliente'=>fake()->sobrenome_cliente(),
            'rua_cliente'=>fake()->rua_cliente(),
            'bairro_cliente'=>fake()->bairro_cliente(),
            'numero_cliente'=>fake()->numero_cliente(),
            'cidade_cliente'=>fake()->cidade_cliente(),
            'estado_cliente'=>fake()->estado_cliente(),
            'telefone_cliente'=>fake()->telefone_cliente(),
            'whatsapp_cliente'=>fake()->whatsapp_cliente(),
            'email_cliente'=>fake()->email_cliente(),
            'preferencia_cliente'=>fake()->preferencia_cliente(),
            /*'nome_empresa_cliente'=>fake()->nome_empresa_cliente(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),*/
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
   /* public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }*/
}
