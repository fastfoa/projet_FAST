<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $f = new Formation();
        $f->setNom("DWWM");
        $manager->persist($f);

        $f = new Formation();
        $f->setNom("CDA");
        $manager->persist($f);

        $f = new Formation();
        $f->setNom("Bachelor");
        $manager->persist($f);

        $manager->flush();
    }
}
