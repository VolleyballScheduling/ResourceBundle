<?php
namespace Volleyball\Bundle\ResourceBundle\DependencyInjection;

use \Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration implements \Symfony\Component\Config\Definition\ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('volleyball_resource');

        return $treeBuilder;
    }
}
