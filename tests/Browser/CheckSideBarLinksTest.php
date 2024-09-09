<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CheckSideBarLinksTest extends DuskTestCase
{
    public function testCRUDSidebar()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:3000/')
                ->assertSee('Drop Zone')
                ->assertSee('Auto Suggestion')
                ->assertSee('Lazy Load');
            });
        }
    }