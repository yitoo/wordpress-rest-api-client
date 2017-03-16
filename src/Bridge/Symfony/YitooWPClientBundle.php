<?php

namespace Yitoo\WPClient\Bridge\Symfony;

use Yitoo\WPClient\Bridge\Symfony\DependencyInjection\YitooWPClientExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;


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
