<?php

namespace Tests\Feature;

use Illuminate\Config\Repository;
use Illuminate\Foundation\Application;
use LaraCoreKit\Core\CoreServiceProvider;
use Tests\TestCase;

class ModuleConfigurationTest extends TestCase
{
    public function test_disabled_optional_modules_are_not_registered(): void
    {
        $app = new Application(base_path());
        $app->instance('config', new Repository(['laracorekit' => [
            'modules' => ['Auth' => false, 'User' => false, 'Blog' => false, 'Settings' => false, 'Media' => false],
            'panel' => ['enabled' => false], 'configure_auth' => false,
        ]]));
        (new CoreServiceProvider($app))->register();
        $this->assertNotEmpty($app->getProviders(\Modules\Core\CoreServiceProvider::class));
        foreach (['Auth', 'User', 'Blog', 'Settings', 'Media'] as $module) {
            $this->assertSame([], $app->getProviders("Modules\\{$module}\\{$module}ServiceProvider"));
        }
    }

    public function test_invalid_dependencies_fail_before_registering_modules(): void
    {
        foreach ([['Auth', 'User'], ['Blog', 'User'], ['Blog', 'Media']] as [$module, $dependency]) {
            config(['laracorekit.modules' => ['Auth' => false, 'User' => true, 'Blog' => false, 'Media' => true]]);
            config(["laracorekit.modules.{$module}" => true, "laracorekit.modules.{$dependency}" => false]);
            try {
                (new CoreServiceProvider($this->app))->register();
                $this->fail('Invalid dependency combination was accepted.');
            } catch (\LogicException $exception) {
                $this->assertSame("LaraCoreKit {$module} requires the {$dependency} module.", $exception->getMessage());
            }
        }
    }

    public function test_panel_cannot_be_enabled_without_user_module(): void
    {
        config(['laracorekit.modules' => ['Auth' => false, 'User' => false, 'Blog' => false], 'laracorekit.panel.enabled' => true]);
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('The LaraCoreKit panel requires the User module.');
        (new CoreServiceProvider($this->app))->register();
    }
}
