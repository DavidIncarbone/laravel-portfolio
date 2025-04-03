<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Type;
use PHPUnit\TextUI\Configuration\Php;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = ["frontEnd", "BackEnd", "FullStack"];

        foreach ($types as $type) {

            $newType = new Type;

            $newType->name = $type;
            $newType->save();
        }
    }
}
