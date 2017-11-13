<?php

namespace Umanit\SonataAdminPostgreSQLSearchBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Umanit\SonataAdminPostgreSQLSearchBundle\Filter\CaseInsensitiveStringFilter;

/**
 * @author Arthur Guigand <aguigand@umanit.fr>
 */
class OverrideStringFilterCompilerPass implements CompilerPassInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        try {
            // Overrides sonata.admin.orm.filter.type.string's class
            $definition = $container->getDefinition('sonata.admin.orm.filter.type.string');
            $definition->setClass(CaseInsensitiveStringFilter::class);
        } catch (ServiceNotFoundException $e) {
            // Do nothing
        }
    }
}
