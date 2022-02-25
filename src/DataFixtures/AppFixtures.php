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
        $fd->setCodeRNCP("XXXX");
        $fd->setCodeDiplome("XXXX");
        $manager->persist($fd);

        $fc = new Formation();
        $fc->setNom("CDA");
        $fc->setCodeRNCP("XXXX");
        $fc->setCodeDiplome("XXXX");
        $manager->persist($fc);

        $fb = new Formation();
        $fb->setNom("Bachelor");
        $fb->setCodeRNCP("XXXX");
        $fb->setCodeDiplome("XXXX");
        $manager->persist($fb);

        $manager->flush();
    }
}