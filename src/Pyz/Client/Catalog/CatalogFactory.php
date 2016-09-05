<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\Catalog;

use Pyz\Client\Catalog\Plugin\Elasticsearch\Query\FeaturedProductsQueryPlugin;
use Spryker\Client\Catalog\CatalogFactory as SprykerCatalogFactory;
use Spryker\Client\Catalog\Plugin\Elasticsearch\ResultFormatter\RawCatalogSearchResultFormatterPlugin;
use Spryker\Client\Search\Plugin\Elasticsearch\QueryExpander\LocalizedQueryExpanderPlugin;
use Spryker\Client\Search\Plugin\Elasticsearch\QueryExpander\StoreQueryExpanderPlugin;

class CatalogFactory extends SprykerCatalogFactory
{

    /**
     * @param int $limit
     *
     * @return \Spryker\Client\Search\Dependency\Plugin\QueryInterface
     */
    public function createFeaturedProductsQueryPlugin($limit)
    {
        return new FeaturedProductsQueryPlugin($limit);
    }

    /**
     * @return \Spryker\Client\Search\Dependency\Plugin\ResultFormatterPluginInterface[]
     */
    public function createFeaturedProductsResultFormatters()
    {
        return [
            new RawCatalogSearchResultFormatterPlugin(),
        ];
    }

    /**
     * @return \Spryker\Client\Search\Dependency\Plugin\QueryExpanderPluginInterface[]
     */
    public function getFeaturedProductsQueryExpanderPlugins()
    {
        return [
            new StoreQueryExpanderPlugin(),
            new LocalizedQueryExpanderPlugin(),
        ];
    }

}
