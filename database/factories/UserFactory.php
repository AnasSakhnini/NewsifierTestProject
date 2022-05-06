<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        
        return [
            'username' => $this->faker->userName().$this->faker->randomNumber(5,false),
            'karma_score' => $this->faker->numberBetween($min = 1000, $max = 9000) ,
            // 'image_id' => Image::factory()->create()->id,           
        ];
    }


}
