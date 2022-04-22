<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker=\Faker\Factory::create();
//        foreach (range(1,10) as $item) DB::table('users')->insert(
//            [
//                'name'=> $faker->name(),
//                'email'=> $faker->email(),
//                'password'=>Hash::make($faker->password()),
//                'created_at'=>now(),
//                'updated_at'=>now(),
//            ]
//        );



        User::factory()
            ->has(Blog::factory()->count(3))
            ->count(25)
            ->create();

    }
}
