<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FakeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create();
//        $faker = \Faker\Factory::create();
//        for ($i=1; $i <= 100; $i++) {
//            User::create([
//                'name' => $faker->name,
//                'email' => $faker->email,
//                'password' => bcrypt('password')
//            ]);
//        }
    }
}
