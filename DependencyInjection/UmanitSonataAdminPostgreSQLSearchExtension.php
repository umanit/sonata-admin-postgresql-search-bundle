<?php

namespace Umanit\SonataAdminPostgreSQLSearchBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Umanit\SonataAdminPostgreSQLSearchBundle\Doctrine\Query\UnaccentString;

/**
 * @author Arthur Guigand <aguigand@umanit.fr>
 */
class UmanitSonataAdminPostgreSQLSearchExtension extends Extension implements PrependExtensionInterface
{
    /**
     * @inheritdoc
     *
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        parent::load($configs, $container);
    }

    /**
     * @inheritdoc
     *
     * @param ContainerBuilder $container
     */
    public function prepend(ContainerBuilder $container)
    {
        // Configure Doctrine unaccent function
        $container->prependExtensionConfig('doctrine', [
            'orm' => [
                'dql' => [
                    'numeric_functions' => [
                        'UNACCENT' => UnaccentString::class,
                    ],
                ],
            ],
        ]);
    }
}
