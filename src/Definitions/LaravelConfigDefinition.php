<?php

namespace Mosaic\Config\Definitions;

use Illuminate\Config\Repository;
use Interop\Container\Definition\DefinitionProviderInterface;
use Mosaic\Config\Adapters\LaravelConfig;
use Mosaic\Config\Config;

class LaravelConfigDefinition implements DefinitionProviderInterface
{
    /**
     * Returns the definition to register in the container.
     *
     * Definitions must be indexed by their entry ID. For example:
     *
     *     return [
     *         'logger' => ...
     *         'mailer' => ...
     *     ];
     *
     * @return array
     */
    public function getDefinitions()
    {
        return [
            Config::class => new LaravelConfig(
                new Repository
            )
        ];
    }
}
