<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ocorrencia>
 */
class OcorrenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'servico_ocorrencias'=>fake()->servico_ocorrencias(),
            'data_ocorrencias'=>fake()->data_ocorrencias(),
            'atendida_ocorrencias'=>fake()->atendida_ocorrencias(),
            'data_atendimento'=>fake()->data_atendimento(),
            'mensagem_ocorrencias'=>fake()->mensagem_ocorrencias(),
        ];
    }
}
