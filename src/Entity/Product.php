<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;
use Webmozart\Assert\Assert;

class Product extends BaseProduct
{
    const COLORS = ['red', 'green', 'blue'];

    /** @var string|null */
    private $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): void
    {
        Assert::nullOrOneOf($color, self::COLORS);

        $this->color = $color;
    }
}
