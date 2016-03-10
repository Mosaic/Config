<?php

namespace Mosaic\Tests\Providers;

use Interop\Container\Definition\DefinitionProviderInterface;
use Mosaic\Config\Config;
use Mosaic\Config\Providers\LaravelConfigProvider;

class LaravelConfigProviderTest extends \PHPUnit_Framework_TestCase
{
    public function getDefinition() : DefinitionProviderInterface
    {
        return new LaravelConfigProvider();
    }

    public function shouldDefine() : array
    {
        return [
            Config::class
        ];
    }

    public function test_defines_all_required_contracts()
    {
        $definitions = $this->getDefinition()->getDefinitions();
        foreach ($this->shouldDefine() as $define) {
            $this->assertArrayHasKey($define, $definitions);
        }
    }
}
