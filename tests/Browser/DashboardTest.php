<?php

namespace Tests\Browser;

use Tests\Browser\Pages\DashboardPage;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DashboardTest extends DuskTestCase
{
    /**
     * Dashboard Tests
     *
     * @return void
     * @throws \Throwable
     */
    public function testDashboardDisplayedCorrectly()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new DashboardPage());
        });
    }
}
