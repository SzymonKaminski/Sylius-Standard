<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Ui\Admin;

use App\Tests\Behat\Page\Admin\Product\CreateSimpleProductPageInterface;
use App\Tests\Behat\Page\Admin\Product\UpdateSimpleProductPageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class ManagingProductsContext implements Context
{
    /** @var CreateSimpleProductPageInterface */
    private $createSimpleProductPage;

    /** @var UpdateSimpleProductPageInterface */
    private $updateSimpleProductPage;

    public function __construct(
        CreateSimpleProductPageInterface $createSimpleProductPage,
        UpdateSimpleProductPageInterface $updateSimpleProductPage
    ) {
        $this->createSimpleProductPage = $createSimpleProductPage;
        $this->updateSimpleProductPage = $updateSimpleProductPage;
    }

    /**
     * @When I set its color to :color
     */
    public function iSetItsColorTo(string $color)
    {
        $this->createSimpleProductPage->selectColor($color);
    }

    /**
     * @Then this product should have color set to :color
     */
    public function theProductShouldHaveColorSetTo(string $color)
    {
        Assert::same($this->updateSimpleProductPage->getColor(), $color);
    }
}
