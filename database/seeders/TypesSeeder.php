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
        $frontEnd = new Type;

        $frontEnd->name = "FrontEnd";
        $frontEnd->save();

        $backEnd = new Type;

        $backEnd->name = "BackEnd";
        $backEnd->save();

        $fullStack = new Type;

        $fullStack->name = "FullStack";
        $fullStack->save();
    }
}
