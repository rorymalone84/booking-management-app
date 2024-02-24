<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creates schedules for employees
        Schedule::create([
            'user_id' => 11, //user 11 is an employee when data is seeded
            'date' => Carbon::now(),
            'start_time' => '09:00:00',
            'end_time' => '17:00:00',
        ]);

        Schedule::create([
            'user_id' => 12, //user 11 is an employee when data is seeded
            'date' => Carbon::now(),
            'start_time' => '06:00:00',
            'end_time' => '16:00:00',
        ]);
    }
}