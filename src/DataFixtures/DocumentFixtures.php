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
        for ($i = 1; $i < 50; $i++) {
            $d = new Document();
            $d->setIdOwner( $i );
            $d->setTitre( $faker->sentence(3,true) );
            $d->setDateCreate( $faker->dateTimeBetween('-1 month', 'now') );
            $d->setFileName( "test.txt" );
            $d->setFileNameOriginal( "test.txt" );
            $manager->persist($d);
            $dest = $faker->numberBetween( 101, 200);
            $d = new RecipientDocument();
            $d->setIdDocument( $i );
            $d->setIdRecipient( $dest );
            $manager->persist($d);
            $d = new RecipientDocument();
            $d->setIdDocument( $i );
            $d->setIdRecipient( $dest+100 );
            $manager->persist($d);
        }

        // Fixture MA
        for ($i = 51; $i < 100; $i++) {
            $d = new Document();
            $d->setIdOwner( $i+50 );
            $d->setTitre( $faker->sentence(3,true) );
            $d->setDateCreate( $faker->dateTimeBetween('-1 month', 'now') );
            $d->setFileName( "test.txt" );
            $d->setFileNameOriginal( "test.txt" );
            $manager->persist($d);
            $dest = $faker->numberBetween( 1, 100);
            $d = new RecipientDocument();
            $d->setIdDocument( $i );
            $d->setIdRecipient( $dest );
            $manager->persist($d);
        }

        for ($i = 101; $i < 150; $i++) {
            $d = new RecipientDocument();
            $d->setIdDocument( $faker->numberBetween( 1, 100) );
            $d->setIdRecipient( $faker->numberBetween( 101, 300) );
            $manager->persist($d);
            $d = new RecipientDocument();
            $dest = $faker->numberBetween( 101, 300);
            $d->setIdDocument( $i );
            $d->setIdRecipient( $dest );
            $manager->persist($d);
            $d = new RecipientDocument();
            $d->setIdDocument( $i );
            $d->setIdRecipient( $dest+100 );
            $manager->persist($d);
        }

        for ($i = 0; $i < 50; $i++) {
            $d = new RecipientDocument();
            $d->setIdDocument( $faker->numberBetween( 1, 100) );
            $d->setIdRecipient( $faker->numberBetween( 100, 150) );
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