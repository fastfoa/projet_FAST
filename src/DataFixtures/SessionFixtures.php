<?php

namespace App\DataFixtures;

use App\Entity\Session;
use App\Entity\UserInSession;
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

        $r = new Session();
        $r->setNom( 'Bachelor ');
        $r->setDebut( new \DateTime('06/04/2014') );
        $r->setFin( new \DateTime('06/04/2014')  );
        $r->setIdFormation( 3  );

        $manager->persist($r);

        for ( $s=1, $u=1, $ma=101, $f=201 ; $s <= 4 ; $s++ )
        {
            for ( $n=0 ; $n<10 ; $n++, $u++ )
            {
                $r = new UserInSession();
                $r->setIdSession( $s );
                $r->setIdUser( $u );
                $manager->persist($r);
            }
            for ( $n=0 ; $n<10 ; $n++, $ma++ )
            {
                $r = new UserInSession();
                $r->setIdSession( $s );
                $r->setIdUser( $ma );
                $manager->persist($r);
            }
            for ( $n=0 ; $n<5 ; $n++, $f++ )
            {
                $r = new UserInSession();
                $r->setIdSession( $s );
                $r->setIdUser( $f );
                $manager->persist($r);
            }
        }
        $manager->flush();
    }
}
