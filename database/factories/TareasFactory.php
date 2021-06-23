<?php

namespace Database\Factories;

use App\Models\Tareas;
use Illuminate\Database\Eloquent\Factories\Factory;

class TareasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tareas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
            
    
                return [
                   'title' => $this->faker->sentence,
                   'description' => $this->faker->text,
                   
                   'empleados_id' => rand(1,3), 
            ];
        
        
    }
}
