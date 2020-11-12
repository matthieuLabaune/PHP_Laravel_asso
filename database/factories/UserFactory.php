<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' =>$this->faker->randomElement($array = array ('male', 'female')),
            'birthdate'=>$this->faker->date(),
            'phone'=> $this->faker->phoneNumber,
            'city'=>$this->faker->city,
            'zip_code'=>$this->faker->postcode,
            'address_1'=> $this->faker->address,
            'address_2'=> $this->faker->address,
            'role' => $this->faker->randomElement($array = array (1, 0)),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
