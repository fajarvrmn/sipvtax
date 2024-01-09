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
            'role_id' => mt_rand(1, 2),
            'username' => $this->faker->name,
            'email_verified_at' => now(),
            'nama' => $this->faker->name,
            'notelp' => 988982983,
            'alamat' => $this->faker->sentence,
            'email' => $this->faker->unique()->safeEmail,
            'foto' => '/asdas/asdsa.jpg',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
