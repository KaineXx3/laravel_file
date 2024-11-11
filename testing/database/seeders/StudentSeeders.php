<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class StudentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,50)as $value){
            DB::table('students')->insert([
                'name'=> $faker->lastName,
                'address'=> $faker->address,
                'gender'=> $faker-> randomElement(['Male','Female'])
            ]);
        }
        //
    }
}
//php artisan db:seed StudentSeeders