<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => str_replace(['Dr.','Mr.','Mrs.','Prof.'],'',$this->faker->name),
            'date_of_birth' => $this->faker->dateTimeBetween('1997-01-01', '2012-12-31')->format('Y-m-d')
        ];
    }
}
