<?php

declare(strict_types=1);

namespace Gandung\Shopee\ShopeeBundle\Tests;

use Gandung\Shopee\ShopeeBundle\ShopeeBundle;

class ShopeeBundleTest extends AbstractTestCase
{
    use TestCaseTrait;

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(ShopeeBundle::class, new ShopeeBundle());
    }

    public function testCanBuildToGivenContainer()
    {
        $bundle = new ShopeeBundle();
        $this->assertInstanceOf(ShopeeBundle::class, $bundle);

        $bundle->build($this->getContainer());
    }
}
