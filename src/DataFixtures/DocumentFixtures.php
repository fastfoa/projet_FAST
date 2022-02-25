<?php

namespace App\DataFixtures;

use App\Entity\Document;
use App\Entity\RecipientDocument;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class DocumentFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        // composer require fzaninotto/faker
        $faker = Faker\Factory::create('fr_FR');

        $hashPW = '$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96';


        // Fixture Apprenant
        for ($i = 0; $i < 50; $i++) {
            $d = new Document();
            $d->setIdOwner( $faker->numberBetween( 1, 10) );
            $d->setTitre( $faker->sentence(3,true) );
            $d->setDateCreate( $faker->dateTimeBetween('-1 month', 'now') );
            $d->setFileName( "test.txt" );
            $d->setFileNameOriginal( "test.txt" );
            $manager->persist($d);
        }

        // Fixture MA
        for ($i = 0; $i < 50; $i++) {
            $d = new Document();
            $d->setIdOwner( $faker->numberBetween( 200, 210) );
            $d->setTitre( $faker->sentence(3,true) );
            $d->setDateCreate( $faker->dateTimeBetween('-1 month', 'now') );
            $d->setFileName( "test.txt" );
            $d->setFileNameOriginal( "test.txt" );
            $manager->persist($d);
        }

        for ($i = 0; $i < 50; $i++) {
            $d = new RecipientDocument();
            $d->setIdDocument( $faker->numberBetween( 1, 100) );
            $d->setIdRecipient( $faker->numberBetween( 101, 300) );
            $manager->persist($d);
        }

        for ($i = 0; $i < 50; $i++) {
            $d = new RecipientDocument();
            $d->setIdDocument( $faker->numberBetween( 201, 300) );
            $d->setIdRecipient( $faker->numberBetween( 1, 100) );
            $manager->persist($d);
        }
        
        $manager->flush();
    }
}