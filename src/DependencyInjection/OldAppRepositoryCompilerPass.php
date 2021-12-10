<?php declare(strict_types=1);


namespace App\DependencyInjection;


use App\OldAppFactory;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class OldAppRepositoryCompilerPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container): void
    {
        $taggedServices = $container->findTaggedServiceIds('old_app');

        foreach ($taggedServices as $serviceId => $tags) {
            $definition = $container->getDefinition($serviceId);
            $definition
                ->setFactory([new Reference(OldAppFactory::class), 'factory'])
                ->addArgument($serviceId);
        }
    }
}
