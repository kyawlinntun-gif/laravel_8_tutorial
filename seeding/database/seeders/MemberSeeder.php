<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('members')->truncate();

        for($i=0; $i<=15; $i++)
        {
            DB::table('members')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                'address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
