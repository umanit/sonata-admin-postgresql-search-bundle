<?php

namespace Umanit\SonataAdminPostgreSQLSearchBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Umanit\SonataAdminPostgreSQLSearchBundle\DependencyInjection\Compiler\OverrideStringFilterCompilerPass;

class UmanitSonataAdminPostgreSQLSearchBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new OverrideStringFilterCompilerPass());
    }
}
