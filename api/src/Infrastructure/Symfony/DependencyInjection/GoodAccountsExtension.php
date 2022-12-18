<?php
declare(strict_types=1);

namespace GoodAccounts\Infrastructure\Symfony\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Routing\Loader\YamlFileLoader;

class GoodAccountsExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');
        $loader->load('routes.yaml');
    }
}