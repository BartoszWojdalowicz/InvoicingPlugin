<?php

namespace Sylius\InvoicingPlugin\Fixture;

use Sylius\Bundle\CoreBundle\Fixture\AbstractResourceFixture;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class ShopBillingDataFixture extends AbstractResourceFixture
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'invoicing_plugin_shop_billing_data';
    }

    /**
     * {@inheritdoc}
     */
    protected function configureResourceNode(ArrayNodeDefinition $resourceNode): void
    {
        $resourceNode
            ->children()
                ->scalarNode('channel')->cannotBeEmpty()->end()
                ->scalarNode('company')->cannotBeEmpty()->end()
                ->scalarNode('country_code')->cannotBeEmpty()->end()
                ->scalarNode('city')->cannotBeEmpty()->end()
                ->scalarNode('postcode')->cannotBeEmpty()->end()
                ->scalarNode('tax_id')->cannotBeEmpty()->end()
                ->scalarNode('street_address')->cannotBeEmpty()->end()
        ;
    }
}
