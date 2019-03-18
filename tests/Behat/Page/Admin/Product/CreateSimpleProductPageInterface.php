<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\Product;

use Sylius\Behat\Page\Admin\Product\CreateSimpleProductPageInterface as BaseCreateSimpleProductPageInterface;

interface CreateSimpleProductPageInterface extends BaseCreateSimpleProductPageInterface
{
    public function selectColor(string $color);
}
