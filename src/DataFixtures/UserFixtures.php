<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class UserFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        // composer require fzaninotto/faker
        $faker = Faker\Factory::create('fr_FR');

        $hashPW = '$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96';


        // Fixture Apprenant
        for ($i = 0; $i < 90; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_APP"]);
            $user->setRoleString("ROLE_APP");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0000
            $user->setNom($faker->lastname);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setTelUrgence1($faker->phoneNumber);
            $user->setTelUrgence2($faker->phoneNumber);
            $user->setDiplome("bac+5");
            $user->setDateNaissance($faker->dateTimeBetween($startDate = '-25 years', $endDate = '-20 years', $timezone = null));
            $user->setGenre("M");
            $user->setNIR("545ehrr5h5");
            $user->setDepNaissance($faker->departmentName);
            $user->setCommuneNaissance($faker->city);
            $user->setNationalite("Française");
            $user->setTravailleurHandicape("Non");
            $user->setSportifHautNiveau($faker->boolean);
            $user->setSituationAvantContrat("Chomage");
            $user->setDernierDiplome("bac+5");
            $user->setDerniereClasse("ce1");
            $user->setDiplomePlusHaut("bac+5");
            $user->setDiplomeVise("Concepteur developpeur d'applications");
            $user->setIntitulePreciDiplomevise("Titre professionnel de concepteur et développeur d'applications");
            $user->setRepresentantLegal1("Toto");
            $user->setRepresentantLegal2("Tata");
            $user->setLinkedin("http://www.linkedin.com");
            $user->setGithub("http://www.github.com");
            $user->setSiteWebPro("http://www.mywebsite.com");
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }
        for ($i = 90; $i < 100; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_APP"]);
            $user->setRoleString("ROLE_APP");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0000
            $user->setDateNaissance($faker->dateTimeBetween($startDate = '-25 years', $endDate = '-20 years', $timezone = null));
            $manager->persist($user);
        }

        // id 101
        // Fixture Maître d'apprentissage
        for ($i = 0; $i < 90; $i++) 
        {
            $user = new User();
            $user->setRoles(["ROLE_MA"]);
            $user->setRoleString("ROLE_MA");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0000
            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setDateNaissance($faker->dateTimeBetween('-60 years', '-20 years'));
            $user->setGenre($faker->title('M'|'F') );
            $user->setLinkedin("http://www.linkedin.com");
            $user->setGithub("http://www.github.com");
            $user->setSiteWebPro("http://www.mywebsite.com");
            $user->setFonctionMA("dev");
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }
        for ($i = 90; $i < 100; $i++) 
        {
            $user = new User();
            $user->setRoles(["ROLE_MA"]);
            $user->setRoleString("ROLE_MA");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0000
            $user->setDateNaissance($faker->dateTimeBetween($startDate = '-25 years', $endDate = '-20 years', $timezone = null));
            $manager->persist($user);
        }
        // id 200
        // Fixture Formateur
        for ($i = 0; $i < 90; $i++) 
        {
            $user = new User();
            $user->setRoles(["ROLE_FORMATEUR"]);
            $user->setRoleString("ROLE_FORMATEUR");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0000
            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setDiplome("bac+10");
            $user->setDateNaissance($faker->dateTimeBetween('-60 years', '-20 years'));
            $user->setGenre($faker->title('M'|'F') );
            $user->setLinkedin("http://www.linkedin.com");
            $user->setGithub("http://www.github.com");
            $user->setSiteWebPro("http://www.mywebsite.com");
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }

        for ($i = 90; $i < 100; $i++) 
        {
            $user = new User();
            $user->setRoles(["ROLE_FORMATEUR"]);
            $user->setRoleString("ROLE_FORMATEUR");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0000
            $user->setDateNaissance($faker->dateTimeBetween($startDate = '-25 years', $endDate = '-20 years', $timezone = null));
            $manager->persist($user);
        }

        // id 300
        // Fixture Entreprise
        for ($j = 0; $j < 90; $j++) {
            $user = new User();
            $user->setRoles(["ROLE_ENT"]);
            $user->setRoleString("ROLE_ENT");
            $user->setEmail($faker->companyEmail);
            $user->setPassword($hashPW); // 0000
            $user->setNom($faker->company);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setSiret($faker->siret);
            $user->setNAF("dj580");
            $user->setEffectif($faker->numberBetween($min = 1, $max = 9000));
            $user->setConventionCollective("Convention collective 66");
            $user->setEmployeurPublic($faker->boolean);
            $user->setCodeIDCCConvention("8905");
            $user->setLinkedin("http://www.linkedin.com");
            $user->setGithub("http://www.github.com");
            $user->setSiteWebPro("http://www.mywebsite.com");
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }
        for ($j = 90; $j < 100; $j++) {
            $user = new User();
            $user->setRoles(["ROLE_ENT"]);
            $user->setRoleString("ROLE_ENT");
            $user->setEmail($faker->companyEmail);
            $user->setPassword($hashPW); // 0000
            $user->setDateNaissance($faker->dateTimeBetween($startDate = '-25 years', $endDate = '-20 years', $timezone = null));
            $manager->persist($user);
        }

        // 400
        // Fixture Admin
        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_ADMIN"]);
            $user->setRoleString("ROLE_ADMIN");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0000
            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setDateNaissance($faker->dateTimeBetween('-60 years', '-20 years'));
            $user->setGenre($faker->title('M'|'F') );
            $manager->persist($user);
        }

        $user = new User();
        $user->setEmail("foreach@academy.fr");
        $user->setRoles(["ROLE_OF"]);
        $user->setRoleString("ROLE_OF");
        $user->setPassword($hashPW); // 0000
        $user->setNom("Foreach Academy");
        $user->setAdresse("393 Rue du général de Gaulle");
        $user->setTelephone("0342215457");
        $user->setCFA(true);
        $user->setDenominationCFAResponsable("foreachacademy - symbolit");
        $user->setNumeroUAICFA("dgjd66sd");
        $manager->persist($user);

        $manager->flush();
    }
}