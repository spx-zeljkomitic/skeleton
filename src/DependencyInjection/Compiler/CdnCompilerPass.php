<?php

namespace App\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class CdnCompilerPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container): void
    {
//        $x = $container->getParameter('env(CDN_BASE_URL)');
//        echo $x;die;
    }
}