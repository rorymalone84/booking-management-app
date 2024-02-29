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
            'description' => 'Knotless braids are the knot free version of box braids where the hair is braided using your natural hair first before any braiding hair is added.',
            'adult_price' => 90,
            'teen_price' => 75,
            'child_price' => 60
        ]);
        Service::create([
            'name' => 'Chain',
            'category_id' => 1,
            'duration' => 240,
            'description' => 'Chain braid description',
            'adult_price' => 90,
            'teen_price' => 75,
            'child_price' => 60
        ]);
        Service::create([
            'name' => 'Wigs',
            'category_id' => 2,
            'duration' => 180,
            'description' => 'An artificial covering of hair for all or most of the head, of either synthetic or natural hair, worn to be stylish or more attractive.',
            'adult_price' => 90,
            'teen_price' => 75,
            'child_price' => 60
        ]);
        Service::create([
            'name' => 'Closure wig',
            'category_id' => 2,
            'duration' => 240,
            'description' => 'A closure style mimics the natural parting. Thats its sole purpose. Unlike the frontal, closure does not mimic the hairline or run from end to end. ',
            'adult_price' => 90,
            'teen_price' => 75,
            'child_price' => 60
        ]);
        Service::create([
            'name' => 'Locking & relocking dreads',
            'category_id' => 3,
            'duration' => 180,
            'description' => 'Locking & relocking dreads',
            'adult_price' => 90,
            'teen_price' => 75,
            'child_price' => 60
        ]);
        Service::create([
            'name' => 'Micro locks',
            'category_id' => 3,
            'duration' => 240,
            'description' => 'Microlocs are a relatively recent hairstyle trend that involves creating small, tightly coiled locs. Unlike traditional dreadlocks, which are usually larger and offer fewer styling options, microlocs are designed to be low-maintenance and highly adaptable.',
            'adult_price' => 90,
            'teen_price' => 75,
            'child_price' => 60
        ]);
    }
}