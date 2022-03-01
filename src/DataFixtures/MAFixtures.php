<?php

namespace App\DataFixtures;

use App\Entity\AppHasMA;
use App\Entity\Formation;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class MAFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        // composer require fzaninotto/faker
        $faker = Faker\Factory::create('fr_FR');
        $hashPW = '$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96';

        for ( $n=1 ; $n<=100 ; $n++ )
        {
            $r = new AppHasMA();
            $r->setIdApprenti( $n );
            $r->setIdMA( $faker->numberBetween(101, 150)  );
            $manager->persist($r);
        }
        $manager->flush();
    }
}
