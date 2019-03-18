<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\Product;

use Sylius\Behat\Page\Admin\Product\CreateSimpleProductPage as BaseCreateSimpleProductPage;

final class CreateSimpleProductPage extends BaseCreateSimpleProductPage implements CreateSimpleProductPageInterface
{
    public function selectColor($color): void
    {
        $this->getElement('color')->selectOption($color);
    }

    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'color' => '#sylius_product_color',
        ]);
    }
}
