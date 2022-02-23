<?php

namespace App\DataFixtures;

use App\Entity\Session;
use App\Entity\Formation;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class SessionFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        // composer require fzaninotto/faker
        $faker = Faker\Factory::create('fr_FR');
        $hashPW = '$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96';


        $r = new Session();
        $r->setNom( 'salad and code');
        $r->setDebut( new \DateTime('06/04/2014') );
        $r->setFin( new \DateTime('06/04/2014')  );
        $r->setIdFormation( 1  );
        $manager->persist($r);

        $r = new Session();
        $r->setNom( 'les codeurs');
        $r->setDebut( new \DateTime('06/04/2014') );
        $r->setFin( new \DateTime('06/04/2014')  );
        $r->setIdFormation( 1  );
        $manager->persist($r);

        $r = new Session();
        $r->setNom( 'front & back');
        $r->setDebut( new \DateTime('06/04/2014') );
        $r->setFin( new \DateTime('06/04/2014')  );
        $r->setIdFormation( 2  );

        $manager->persist($r);


        $manager->flush();
    }
}
