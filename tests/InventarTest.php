<?php

declare(strict_types=1);

namespace App\Tests;

use App\Entity\Inventar;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InventarTest extends KernelTestCase
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testStoreInventar()
    {
        $inventar = new Inventar();
        $inventar->setName('Tisch');

        $this->entityManager->persist($inventar);
        $this->entityManager->flush();

        sleep(1);

        $inventar->setName('Tisch update');
        $this->entityManager->persist($inventar);
        $this->entityManager->flush();

        $this->assertSame(time() - 1, $inventar->getCreatedAt()->getTimestamp());
        $this->assertSame(time(), $inventar->getUpdatedAt()->getTimestamp());
    }

    public function testLoad()
    {
        $r = $this->entityManager->getRepository(Inventar::class)->find(10);


        dd($r);
    }
}
