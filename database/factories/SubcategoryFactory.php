<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $scategory_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($scategory_name);
        return [
            'name'=>  $scategory_name,
            'slug'=>  $slug,
            'category_id' => $this->faker->numberBetween(80,84),
        ];
    }
}
