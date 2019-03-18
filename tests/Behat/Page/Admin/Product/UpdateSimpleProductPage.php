<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\Product;

use Sylius\Behat\Page\Admin\Product\UpdateSimpleProductPage as BaseUpdateSimpleProductPage;

final class UpdateSimpleProductPage extends BaseUpdateSimpleProductPage implements UpdateSimpleProductPageInterface
{
    public function getColor(): string
    {
        return $this->getElement('color')->getValue();
    }

    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'color' => '#sylius_product_color',
        ]);
    }
}
