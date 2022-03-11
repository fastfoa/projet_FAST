<?php

namespace App\DataFixtures;

use App\Entity\MAHasEnt;
use App\Entity\Formation;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ENTFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // composer require fzaninotto/faker
        $faker = Faker\Factory::create('fr_FR');

        for ( $n=101 ; $n < 200 ; $n++ )
        {
            $r = new MAHasEnt();
            $r->setIdMA( $n );
            $r->setIdENT( $faker->numberBetween(301, 350)  );
            $manager->persist($r);
        }
        $manager->flush();
    }
}