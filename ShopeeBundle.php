<?php

declare(strict_types=1);

namespace Gandung\Shopee\ShopeeBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Paulus Gandung Prakosa <rvn.plvhx@gmail.com>
 */
class ShopeeBundle extends Bundle
{
	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container)
	{
		parent::build($container);
	}
}
