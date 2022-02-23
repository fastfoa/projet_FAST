<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;
use App\Entity\Session;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {   $faker = Faker\Factory::create('fr_FR');

        $f = new Formation();
        $f->setNom("DWWM");
        $manager->persist($f);

        $f = new Formation();
        $f->setNom("CDA");
        $manager->persist($f);

        $f = new Formation();
        $f->setNom("Bachelor");
        $manager->persist($f);

        $s = new Session();
        $s->setNom();
        $s->setDebut();
        $s->setFin();



        $manager->flush();
    }
}
