<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fd = new Formation();
        $fd->setNom("DWWM");
        $manager->persist($fd);

        $fc = new Formation();
        $fc->setNom("CDA");
        $manager->persist($fc);

        $fb = new Formation();
        $fb->setNom("Bachelor");
        $manager->persist($fb);

        $manager->flush();
    }
}
