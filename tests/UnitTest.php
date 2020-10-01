<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Prinx\Arr;
use Prinx\Config;

/**
 * @todo The tests need works
 */
class EnvTest extends TestCase
{
    public function testExample()
    {
        $configArray = (new Config(__DIR__.'/../../config/'))->get();

        $this->assertEquals(Arr::multiKeyGet('app.app_env', $configArray), 'production');
        $this->assertEquals(Arr::multiKeyGet('database.default.dbname', $configArray), 'test');

        $configArray = Arr::multiKeySet('app.app_env', 'development');
        $this->assertEquals(Arr::multiKeySet('app.app_env', $configArray), 'development');
    }
}
