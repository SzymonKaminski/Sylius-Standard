<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Shop\Product;

use Sylius\Behat\Page\Shop\Product\ShowPage as BaseShowPage;

final class ShowPage extends BaseShowPage implements ShowPageInterface
{
    public function getColor(): string
    {
        return $this->getElement('product_color')->getText();
    }

    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'product_color' => '#product-color',
        ]);
    }
}
