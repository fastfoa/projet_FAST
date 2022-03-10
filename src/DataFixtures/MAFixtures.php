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
 
        for ( $n=1 ; $n < 90 ; $n++ )
        {
            $r = new AppHasMA();
            $r->setIdApprenti( $n );
            $r->setIdMA( $faker->numberBetween(101, 200)  );
            $manager->persist($r);
        }
        $manager->flush();
    }
}