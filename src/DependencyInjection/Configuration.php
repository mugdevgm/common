<?php

namespace Mugdev\Common\DependencyInjection;

use Mugdev\Common\MugdevCommonBundle;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(MugdevCommonBundle::getConfigName());

        return $treeBuilder;
    }
}
