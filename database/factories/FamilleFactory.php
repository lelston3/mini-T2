<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Famille;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Famille>
 */
class FamilleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //Link factory to model
    protected $model = Famille::class;

    public function definition(): array
    {
        
        return [
            //
            'nom' => $this->faker->word(),
        ];
    }
}
