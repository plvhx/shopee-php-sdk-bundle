<?php

declare(strict_types=1);

namespace Gandung\Shopee\ShopeeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('shopee');

        $treeBuilder
            ->getRootNode()
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('partner_key')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
            ->end()
            ->children()
                ->scalarNode('sandboxed')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
