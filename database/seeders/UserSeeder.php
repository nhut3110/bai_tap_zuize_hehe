<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'contact_number' => $faker->phoneNumber,
            ]);
            DB::table('books')->insert([
                'title' => $faker->text,
                'author' => $faker->name,
                'numberpage' => $faker->numberBetween(5,500),
                'category_id' => $faker->numberBetween(5,500),
                'public_date' => $faker->date(),
                'price' => $faker->randomNumber(),
                'image' => "https://mcdn.coolmate.me/image/October2021/meme-cheems-1.png",
                'description' => $faker->realText(),
            ]);
        }

    }
}
