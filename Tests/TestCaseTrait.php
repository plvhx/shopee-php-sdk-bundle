<?php

declare(strict_types=1);

namespace Gandung\Shopee\ShopeeBundle\Tests;

trait TestCaseTrait
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->setContainer($this->createContainer());
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
    }
}
