<?php

namespace Yitoo\WPClient\Bridge\Symfony;

use PMD\Ingredient\Bridge\Symfony\DependencyInjection\PMDIngredientExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class PMDIngredientBundle.
 */
class YitooWPClientBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    /**
     * @return YitooWPClientExtension
     */
    public function getContainerExtension()
    {
        return new YitooWPClientExtension();
    }
}
