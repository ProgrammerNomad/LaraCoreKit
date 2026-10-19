<?php

namespace Tests\Feature;

use LaraCoreKit\DemoModule\DemoServiceProvider;
use Modules\User\Models\User;
use Tests\TestCase;

class StarterTest extends TestCase
{
    public function test_starter_frontend_and_components_are_available(): void
    {
        $this->get('/')->assertOk()->assertSee('Make it yours.');
        $this->get('/ui-showcase')->assertOk();
        $this->get('/ui-showcase/charts/line-chart')->assertOk();
        $this->get('/docs')->assertNotFound();
    }

    public function test_core_classes_are_loaded_from_application_modules(): void
    {
        $source = (new \ReflectionClass(User::class))->getFileName();
        $this->assertSame(realpath(base_path('modules/User/src/Models/User.php')), realpath($source));
        $this->assertFalse(class_exists(DemoServiceProvider::class));
    }
}
