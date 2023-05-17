<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            ['project_name' => 'Mysterybox'],
            ['project_name' => 'Asclepius'],
            ['project_name' => 'Footypicks'],
        ];
        Project::insert($projects);
    }
}
