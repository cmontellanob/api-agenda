<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $profesion=Profesion::inRandomOrder()->first();
        return [
            'ci'=>fake()->randomNumber(9),
            'nombres'=>fake()->name(),
            'apellidos'=>fake()->lastname(),
            'celular'=>fake()->phoneNumber(),
            'email'=>fake()->unique()->safeEmail(),
            'profesion_id'=>$profesion->id
        ];
    }
}
