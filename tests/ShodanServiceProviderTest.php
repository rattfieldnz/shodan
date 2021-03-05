<?php

namespace RattfieldNz\Shodan\Tests;

use Illuminate\Foundation\Application;
use Mockery;
use Mockery\MockInterface;
use RattfieldNz\Shodan\Shodan;
use RattfieldNz\Shodan\ShodanServiceProvider;

/**
 * Class ShodanServiceProviderTest.
 */
class ShodanServiceProviderTest extends TestCase
{
    /**
     * @var MockInterface
     */
    protected $appMock;

    /**
     * @var MockInterface
     */
    protected $config;

    /**
     * @var ShodanServiceProvider
     */
    protected $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->config = Mockery::mock();

        $this->appMock = Mockery::mock(Application::class);

        $this->provider = new ShodanServiceProvider($this->app);
    }

    public function testServiceProviderIsWorking()
    {
        $this->appMock->shouldReceive('singleton')->with(
            'safe-urls',
            Mockery::type('Closure')
        )->andReturnNull();

        $this->appMock->shouldReceive('alias')->with(
            Shodan::class,
            'shodan'
        )->andReturnNull();

        $this->assertNull($this->provider->register());
    }

    public function testProvides()
    {
        $this->appMock->shouldReceive('provides')->andReturn('shodan');
        $this->assertEquals(['shodan'], $this->provider->provides());
    }

    /**
     * Test boot provider.
     */
    public function testBoot()
    {
        $this->assertNull($this->provider->boot());
    }

    public function testBootForConsole()
    {
        $this->appMock->shouldReceive('publishes')
            ->zeroOrMoreTimes()
            ->with('path.config')
            ->andReturn('/some/config/path');

        $this->appMock->shouldReceive('commands')
            ->zeroOrMoreTimes()
            ->with(['shodan'])
            ->andReturnNull();

        $this->assertNull($this->provider->bootForConsole());
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
