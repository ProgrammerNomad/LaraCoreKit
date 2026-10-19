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

    public function test_prebuilt_frontend_assets_are_included(): void
    {
        foreach (['laracorekit.css', 'showcase.css', 'showcase.js'] as $asset) {
            $this->assertFileExists(public_path('vendor/laracorekit/'.$asset));
        }
    }

    public function test_core_classes_are_loaded_from_application_modules(): void
    {
        $source = (new \ReflectionClass(User::class))->getFileName();
        $this->assertSame(realpath(base_path('modules/User/src/Models/User.php')), realpath($source));
        $this->assertFalse(class_exists(DemoServiceProvider::class));
    }
}
