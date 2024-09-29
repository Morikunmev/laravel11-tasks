<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task= new Task();
        $task->title='Tarea 1'; 
        $task->description='Esta es la tarea número 1';
        $task->user_id = User::find(1)->id;
        $task->save();
    }
}
