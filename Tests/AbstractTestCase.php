<?php

declare(strict_types=1);

namespace Gandung\Shopee\ShopeeBundle\Tests;

use Gandung\Shopee\ShopeeBundle\DependencyInjection\ShopeeExtension;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

use function sha1;
use function sys_get_temp_dir;
use function uniqid;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
abstract class AbstractTestCase extends BaseTestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     * @return ContainerBuilder
     */
    protected function createContainer()
    {
        $parameters = new ParameterBag([
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.cache_dir' => sys_get_temp_dir(),
            'kernel.environment' => 'test'
        ]);
        $container = new ContainerBuilder($parameters);
        $extension = new ShopeeExtension();

        $extension->load(
            [
                'shopee' => [
                    'partner_key' => sha1(uniqid()),
                    'sandboxed' => false
                ]
            ],
            $container
        );

        $container->registerExtension($extension);
        return $container;
    }

    /**
     * @param ContainerBuilder $container
     * @return void
     */
    public function setContainer(ContainerBuilder $container)
    {
        $this->container = $container;
    }

    /**
     * @return ContainerBuilder
     */
    public function getContainer()
    {
        return $this->container;
    }
}
