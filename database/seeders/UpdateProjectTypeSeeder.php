<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class UpdateProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Project::where("id", 1)->update(["type" => "FullStack"]);
        Project::where("id", 2)->update(["type" => "FrontEnd"]);
    }
}
