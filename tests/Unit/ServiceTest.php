<?php

namespace Tests\Unit;

use App\Models\Service;
use App\Models\Category;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_display_categories_and_services(): void
    {
        $response = $this->get(route('customer.services'));

        $response->assertViewHas(['categories' => Category::all(), 'services' => Service::all()]);

        $response->assertStatus(200);
    }

    public function test_display_single_service(): void
    {
        $firstServiceRegistered = Service::first();

        $response = $this->get(route('customer.service', ['id' => $firstServiceRegistered->id]));

        $response->assertViewHas(['service' => Service::findOrFail($firstServiceRegistered->id)]);

        $response->assertStatus(200);
    }
}
