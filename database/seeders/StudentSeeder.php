<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // print_r($faker->mobileNumber); exit;
        $gender = $faker->randomElement(['male', 'female']);
        foreach (range(1,10) as $index) {
            $number = rand(9999999999,6666666666);
            DB::table('students')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email,
                'address' => $faker->address,
                'mobile' => $number,
            ]);
        }
    }
}
