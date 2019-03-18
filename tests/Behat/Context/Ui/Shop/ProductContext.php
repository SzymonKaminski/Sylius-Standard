<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Ui\Shop;

use App\Tests\Behat\Page\Shop\Product\ShowPageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class ProductContext implements Context
{
    /** @var ShowPageInterface */
    private $showPage;

    public function __construct(ShowPageInterface $showPage)
    {
        $this->showPage = $showPage;
    }

    /**
     * @Then I should see :color as its color
     */
    public function iShouldSeeAsItsColor(string $color)
    {
        Assert::same($this->showPage->getColor(), $color);
    }
}
