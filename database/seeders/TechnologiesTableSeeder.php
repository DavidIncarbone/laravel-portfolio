<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {

        $technologies = ["HTML", "CSS", "JavaScript", "React.js", "Node.js", "Express.js", "MySQL"];

        foreach ($technologies as $technology) {

            $newTechnology = new Technology;

            $newTechnology->name = $technology;
            $newTechnology->color = $faker->hexColor();

            $newTechnology->save();
        }
    }
}
