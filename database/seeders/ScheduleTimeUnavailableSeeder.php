<?php

namespace Database\Seeders;

use App\Models\ScheduleTimeUnavailable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleTimeUnavailableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScheduleTimeUnavailable::create([
            'schedule_id' => 1,
            'start_time' => '13:00:00',
            'end_time' => '14:00:00',
        ]);

        ScheduleTimeUnavailable::create([
            'schedule_id' => 2,
            'start_time' => '12:00:00',
            'end_time' => '14:00:00',
        ]);
    }
}