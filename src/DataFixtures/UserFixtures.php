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
        $user = new User();
        $user->setEmail("toto@titi.fr");
        $user->setRoles(["ROLE_APP"]);
        $user->setPassword($hashPW); // 0123
        $user->setNom("Titi");
        $user->setPrenom("Toto");
        $user->setAdresse("45 rue du champ");
        $user->setSession("CDA");
        $user->setTelephone("0548156514");
        $user->setDiplome("bac+5");
        $user->setDateNaissance(new \DateTime());
        $user->setGenre("M");
        $user->setNIR("545ehrr5h5");
        $user->setDepNaissance("Nord");
        $user->setCommuneNaissance("Lille");
        $user->setNationalite("Française");
        $user->setTravailleurHandicape("Non");
        $user->setSportifHautNiveau(true);
        $user->setSituationAvantContrat("Chomage");
        $user->setDernierDiplome("bac+5");
        $user->setDerniereClasse("ce1");
        $user->setDiplomePlusHaut("bac+5");
        $user->setDiplomeVise("Concepteur developpeur d'applications");
        $user->setIntitulePreciDiplomevise("Titre professionnel de concepteur et développeur d'applications");
        $manager->persist($user);

        // Fixture Entreprise
        $user = new User();
        $user->setEmail("my@entreprise.fr");
        $user->setRoles(["ROLE_ENT"]);
        $user->setPassword($hashPW); // 0123
        $user->setNom("Google");
        $user->setAdresse("45 rue du javascript");
        $user->setTelephone("0728756614");
        $user->setSiret("54u5th5t4jrjrjkt5");
        $user->setNAF("dj580");
        $user->setEffectif(500);
        $user->setConventionCollective("Convention collective");
        $user->setEmployeurPublic(false);
        $user->setCodeIDCCConvention("8905");
        $manager->persist($user);

        // Fixture Maître d'apprentissage
        $user = new User();
        $user->setEmail("the@maitre.fr");
        $user->setRoles(["ROLE_MA"]);
        $user->setPassword($hashPW); // 0000
        $user->setNom("Iam");
        $user->setPrenom("Zorro");
        $user->setAdresse("197 rue symfony");
        $user->setTelephone("0604274604");
        $user->setDateNaissance(new \DateTime());
        $manager->persist($user);

        // Fixture Formateur
        $user = new User();
        $user->setEmail("xavier@gmail.fr");
        $user->setRoles(["ROLE_FORMATEUR"]);
        $user->setPassword($hashPW); // 456
        $user->setNom("Bourget");
        $user->setPrenom("Xavier");
        $user->setAdresse("12 rue de la frite");
        $user->setTelephone("0812654251");
        $user->setDiplome("bac+10");
        $user->setDateNaissance(new \DateTime());
        $user->setGenre("M");
        $manager->persist($user);

        // Fixture Organisme de formation
        $user = new User();
        $user->setEmail("foreach@academy.fr");
        $user->setRoles(["ROLE_OF"]);
        $user->setPassword($hashPW); // 789
        $user->setNom("Foreach Academy");
        $user->setAdresse("393 Rue du général de Gaulle");
        $user->setTelephone("0342215457");
        $user->setCFA(true);
        $user->setDenominationCFAResponsable("foreachacademy - symbolit");
        $user->setNumeroUAICFA("dgjd66sd");
        $manager->persist($user);

        // Fixture Admin
        $user = new User();
        $user->setNom('Admin');
        $user->setEmail("super@admin.fr");
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword($hashPW); // 789
        $manager->persist($user);

        // Fixture Maître d'apprentissage
        for ($i = 0; $i <= 10; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_MA"]);
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0123
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
            $user->setRGPDOK(true);
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }

        // Fixture Formateur
        for ($i = 0; $i <= 10; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_FORMATEUR"]);
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0123
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
            $user->setRGPDOK(true);
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }

        // Fixture Admin
        for ($i = 0; $i <= 3; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_ADMIN"]);
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0123
            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setDateNaissance($faker->dateTimeBetween('-60 years', '-20 years'));
            $user->setGenre($faker->title('M'|'F') );
            $manager->persist($user);
        }

        // Fixture Indépendant
        for ($i = 0; $i <= 10; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_IND"]);
            $user->setFonctionMA("PDG");
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0123
            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setDateNaissance($faker->dateTimeBetween('-60 years', '-20 years'));
            $user->setGenre($faker->title('M'|'F') );

            $user->setSiret($faker->siret);
            $user->setNAF("dj580");
            $user->setEffectif(500);
            $user->setConventionCollective("Convention collective");
            $user->setEmployeurPublic(false);
            $user->setCodeIDCCConvention("8905");
            $user->setLinkedin("http://www.linkedin.com");
            $user->setGithub("http://www.github.com");
            $user->setSiteWebPro("http://www.mywebsite.com");
            $user->setRGPDOK(true);
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }

        // Fixture Apprenant
        for ($i = 0; $i <= 50; $i++) {
            $user = new User();
            $user->setRoles(["ROLE_APP"]);
            $user->setEmail($faker->email);
            $user->setPassword($hashPW); // 0123
            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setTelephone($faker->phoneNumber);
            $user->setSession("CDA");
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
            $user->setLinkedin("http://www.linkedin.com/%22");
            $user->setGithub("http://www.github.com/%22");
            $user->setSiteWebPro("http://www.mywebsite.com/%22");
            $user->setRGPDOK($faker->boolean);
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }

        // Fixture Entreprise
        for ($j = 0; $j <= 20; $j++) {
            $user = new User();
            $user->setRoles(["ROLE_ENT"]);
            $user->setEmail($faker->companyEmail);
            $user->setPassword($hashPW); // 0123
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
            $user->setRGPDOK(true);
            $user->setProfilEnabled(true);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
