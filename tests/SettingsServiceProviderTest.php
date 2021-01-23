<?php

namespace Aldrumo\Settings\Tests;

use Aldrumo\Settings\Contracts\Repository as SettingsContract;
use Aldrumo\Settings\Repository;

class SettingsServiceProviderTest extends TestCase
{
    /** @test */
    public function setting_repo_is_loaded()
    {
        $this->assertInstanceOf(
            Repository::class,
            $this->app[SettingsContract::class]
        );

        $this->assertInstanceOf(
            Repository::class,
            app(SettingsContract::class)
        );
    }
}
