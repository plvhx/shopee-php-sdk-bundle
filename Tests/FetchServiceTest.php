<?php

declare(strict_types=1);

namespace Gandung\Shopee\ShopeeBundle\Tests;

use Gandung\Shopee\Service\Discount;
use Gandung\Shopee\Service\FirstMileTracking;
use Gandung\Shopee\Service\Image;
use Gandung\Shopee\Service\Item;
use Gandung\Shopee\Service\Logistics;
use Gandung\Shopee\Service\Orders;
use Gandung\Shopee\Service\Payment;
use Gandung\Shopee\Service\PublicService;
use Gandung\Shopee\Service\Returns;
use Gandung\Shopee\Service\Shop;
use Gandung\Shopee\Service\ShopCategory;
use Gandung\Shopee\Service\TopPicks;

class FetchServiceTest extends AbstractTestCase
{
    use TestCaseTrait;

    public function testCanGetDiscountServiceObject()
    {
        $this->assertInstanceOf(
            Discount::class,
            $this->getContainer()->get(Discount::class)
        );
    }

    public function testCanGetFirstMileTrackingServiceObject()
    {
        $this->assertInstanceOf(
            FirstMileTracking::class,
            $this->getContainer()->get(FirstMileTracking::class)
        );
    }

    public function testCanGetImageServiceObject()
    {
        $this->assertInstanceOf(
            Image::class,
            $this->getContainer()->get(Image::class)
        );
    }

    public function testCanGetItemServiceObject()
    {
        $this->assertInstanceOf(
            Item::class,
            $this->getContainer()->get(Item::class)
        );
    }

    public function testCanGetLogisticsServiceObject()
    {
        $this->assertInstanceOf(
            Logistics::class,
            $this->getContainer()->get(Logistics::class)
        );
    }

    public function testCanGetOrdersServiceObject()
    {
        $this->assertInstanceOf(
            Orders::class,
            $this->getContainer()->get(Orders::class)
        );
    }

    public function testCanGetPaymentServiceObject()
    {
        $this->assertInstanceOf(
            Payment::class,
            $this->getContainer()->get(Payment::class)
        );
    }

    public function testCanGetPublicServiceObject()
    {
        $this->assertInstanceOf(
            PublicService::class,
            $this->getContainer()->get(PublicService::class)
        );
    }

    public function testCanGetReturnsServiceObject()
    {
        $this->assertInstanceOf(
            Returns::class,
            $this->getContainer()->get(Returns::class)
        );
    }

    public function testCanGetShopServiceObject()
    {
        $this->assertInstanceOf(
            Shop::class,
            $this->getContainer()->get(Shop::class)
        );
    }

    public function testCanGetShopCategoryServiceObject()
    {
        $this->assertInstanceOf(
            ShopCategory::class,
            $this->getContainer()->get(ShopCategory::class)
        );
    }

    public function testCanGetTopPicksServiceObject()
    {
        $this->assertInstanceOf(
            TopPicks::class,
            $this->getContainer()->get(TopPicks::class)
        );
    }
}
