<?php

declare(strict_types=1);

namespace Gandung\Shopee\ShopeeBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class ShopeeExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__ . DIRECTORY_SEPARATOR . '../Resources/config')
        );

        $loader->load('services.xml');

        $processor     = new Processor();
        $configuration = new Configuration();
        $config        = $processor->processConfiguration($configuration, $configs);

        $container->setParameter('shopee.partner_key', $config['partner_key']);
        $container->setParameter('shopee.sandboxed', $config['sandboxed']);
    }
}
