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
}
