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
        $hashPW = '$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96';

        for ( $n=101 ; $n<=150 ; $n++ )
        {
            $r = new MAHasEnt();
            $r->setIdMA( $n );
            $r->setIdENT( $faker->numberBetween(251, 270)  );
            $manager->persist($r);
        }
        $manager->flush();
    }
}
