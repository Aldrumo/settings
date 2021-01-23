<?php

namespace Aldrumo\Settings\Tests;

use Aldrumo\Settings\SettingsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SettingsServiceProvider::class,
        ];
    }
}
