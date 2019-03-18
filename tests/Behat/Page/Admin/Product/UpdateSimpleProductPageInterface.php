<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin\Product;

use Sylius\Behat\Page\Admin\Product\UpdateSimpleProductPageInterface as BaseUpdateSimpleProductPageInterface;

interface UpdateSimpleProductPageInterface extends BaseUpdateSimpleProductPageInterface
{
    public function getColor(): string;
}
