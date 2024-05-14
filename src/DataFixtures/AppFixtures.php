<?php

namespace App\DataFixtures;


use App\Factory\VinylMixFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        VinylMixFactory::createOne();
        $manager->flush();
    }
}
