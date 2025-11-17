<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //TGC rate table
    private array $tgcRates = [3, 6, 11, 22];

    public function definition(): array
    {
        return [
            //
            'nom' => $this->faker->sentence(),
            'prix_ht' => $this->faker->numberBetween(100, 10000),
            'prix_achat' => function (array $attributes){ return $this->faker->numberBetween(0, $attributes['prix_ht']); },
            'taux_TGC' => $this->faker->randomElement($this->tgcRates),
            'famille_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
