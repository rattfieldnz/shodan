<?php

namespace RattfieldNz\Shodan\Tests\Facades;

use Illuminate\Foundation\Application;
use Prophecy\Prophet;
use RattfieldNz\Shodan\Facades\ShodanFacade;
use RattfieldNz\Shodan\Shodan;
use RattfieldNz\Shodan\Tests\TestCase;

class ShodanFacadeTest extends TestCase
{
    protected $app;

    protected $prophet;

    protected function setUp(): void
    {
        parent::setUp();

        $this->prophet = new Prophet();

        $this->app = $this->prophet->prophesize(Application::class);

        $this->app->offsetGet('shodan')
            ->willReturn((new Shodan()));

        ShodanFacade::setFacadeApplication($this->app->reveal());
    }

    public function testFacadesWorksAsExpected()
    {
        $this->assertInstanceOf(
            Shodan::class,
            ShodanFacade::getFacadeRoot()
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }
}
