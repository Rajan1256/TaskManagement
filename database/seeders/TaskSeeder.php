<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            ['project_id' => 1, 'task_name' => 'Complete the design task'],
            ['project_id' => 1, 'task_name' => 'User admin login task'],
            ['project_id' => 1, 'task_name' => 'Autobid logic task'],
            ['project_id' => 1, 'task_name' => 'Test the whole system'],
            ['project_id' => 2, 'task_name' => 'Appoinment task'],
            ['project_id' => 2, 'task_name' => 'Medicine reminder task'],
            ['project_id' => 2, 'task_name' => 'Implement video calling task'],
            ['project_id' => 2, 'task_name' => 'Test the whole system'],
            ['project_id' => 3, 'task_name' => 'Rnd on third party api for football app'],
            ['project_id' => 3, 'task_name' => 'Test the whole system'],
            ['project_id' => 3, 'task_name' => 'Implement the bet logic'],
            ['project_id' => 3, 'task_name' => 'Set the Leagues, schedules, fixers In the system'],
        ];
        Task::insert($tasks);
    }
}
