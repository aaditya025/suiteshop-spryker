<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business\CombinedProduct\Product;

use Pyz\Zed\DataImport\Business\Model\Product\ProductLocalizedAttributesExtractorStep;

class CombinedProductLocalizedAttributesExtractorStep extends ProductLocalizedAttributesExtractorStep
{
    /**
     * @return string
     */
    protected function getAttributeKeyPrefix(): string
    {
        return 'product.attribute_key_';
    }

    /**
     * @return string
     */
    protected function getAttributeValuePrefix(): string
    {
        return 'product.value_';
    }
}
