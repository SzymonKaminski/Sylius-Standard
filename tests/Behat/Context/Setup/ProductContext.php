<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use Doctrine\ORM\EntityManagerInterface;
use Sylius\Behat\Service\SharedStorageInterface;

class ProductContext implements Context
{
    /** @var SharedStorageInterface */
    private $sharedStorage;

    /** @var EntityManagerInterface */
    private $entityManager;

    public function __construct(SharedStorageInterface $sharedStorage, EntityManagerInterface $entityManager)
    {
        $this->sharedStorage = $sharedStorage;
        $this->entityManager = $entityManager;
    }

    /**
     * @Given this product has color set to :color
     */
    public function thisProductHasColorSetTo(string $color)
    {
        $this->sharedStorage->get('product')->setColor($color);
        $this->entityManager->flush();
    }
}
