<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_kota'=>'Bandung'
        ];
    }
}
