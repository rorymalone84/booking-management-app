<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Knotless',
            'category_id' => 1,
            'duration' => 180,
            'cost' => 90000
        ]);
        Service::create([
            'name' => 'Chain',
            'category_id' => 1,
            'duration' => 240,
            'cost' => 90000
        ]);
        Service::create([
            'name' => 'Wigs',
            'category_id' => 2,
            'duration' => 180,
            'cost' => 90000
        ]);
        Service::create([
            'name' => 'Closure wig',
            'category_id' => 2,
            'duration' => 240,
            'cost' => 90000
        ]);
        Service::create([
            'name' => 'Locking & relocking dreads',
            'category_id' => 3,
            'duration' => 180,
            'cost' => 90000
        ]);
        Service::create([
            'name' => 'Micro locks',
            'category_id' => 3,
            'duration' => 240,
            'cost' => 90000
        ]);
    }
}