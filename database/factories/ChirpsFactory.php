<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ChirpsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        return [
            'user_id' => random_int(1, 9),
            'message' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit",
        ];
    }
}
