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
        $faker = Faker\Factory::create('fr_FR');


        // Fixture Apprenant
        $user = new User();
        $user->setEmail("toto@titi.fr");
        $user->setRoles(["ROLE_APP"]);
        $user->setPassword('$2y$13$Td/hy38QDVNeXhaQIz.jZOU23o0HVOe8LDLuYAK9aXQDYeNLff5aO'); // 0123
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
        $user->setPassword('$2y$13$Td/hy38QDVNeXhaQIz.jZOU23o0HVOe8LDLuYAK9aXQDYeNLff5aO'); // 0123
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
        for ($i = 0; $i <= 10; $i++) {
        $user = new User();
        $user->setEmail("the@maitre.fr");
        $user->setRoles(["ROLE_MA"]);
        $user->setPassword('$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96'); // 0000
        $user->setNom("Iam");
        $user->setPrenom("Zorro");
        $user->setAdresse("197 rue symfony");
        $user->setTelephone("0604274604");
        $user->setDateNaissance(new \DateTime());
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setFonctionMA("dev");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);
        }

        // Fixture Formateur
        for ($i = 0; $i <= 3; $i++) {
        $user = new User();
        $user->setEmail("xavier@gmail.fr");
        $user->setRoles(["ROLE_FORMATEUR"]);
        $user->setPassword('$2y$13$pmUyYAeOOJqhq2lBadhRpOM4BmIV8ttyZURModBZ26za4WEimKS4i'); // 456
        $user->setNom("Bourget");
        $user->setPrenom("Xavier");
        $user->setAdresse("12 rue de la frite");
        $user->setTelephone("0812654251");
        $user->setDiplome("bac+10");
        $user->setDateNaissance(new \DateTime());
        $user->setGenre("M");
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);
        }

        // Fixture Organisme de formation
        
        $user = new User();
        $user->setEmail("organisme@formation.fr");
        $user->setRoles(["ROLE_OF"]);
        $user->setPassword('$2y$13$psh41BRs9DM2NbQbmswERufwjiWzX8WNqjGvIFgqGimHTNunlGSHm'); // 789
        $user->setSiret("rr4ndgrg45");
        $user->setCFA(true);
        $user->setAdresse("39 Rue du général");
        $user->setTelephone("0342289457");
        $user->setDenominationCFAResponsable("CFA Nord");
        $user->setNumeroUAICFA("dgjdg8sd");
        $user->setDiplomeVise("developpeur web et web mobile");
        $user->setIntitulePreciDiplomevise("Titre Professionnel de développeur web et web mobile");
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);
        $manager->persist($user);

        // Fixture Admin
        for ($i = 0; $i <= 3; $i++) {
        $user = new User();
        $user->setEmail("super@admin.fr");
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword('$2y$13$psh41BRs9DM2NbQbmswERufwjiWzX8WNqjGvIFgqGimHTNunlGSHm'); // 789
        $manager->persist($user);
        }

         // Fixture Indépendant

         for ($i = 0; $i <= 10; $i++) {
         $user = new User();
         $user->setEmail("you@entreprise.fr");
         $user->setRoles(["ROLE_IND"]);
         $user->setPassword('$2y$13$Td/hy38QDVNeXhaQIz.jZOU23o0HVOe8LDLuYAK9aXQDYeNLff5aO'); // 0123
         $user->setNom("Zuckerberg");
         $user->setRaisonSocial("Facebook");
         $user->setPrenom("Marc");
         $user->setFonctionMA("PDG");
         $user->setDateNaissance(new \DateTime());
         $user->setAdresse("45 rue du typescript");
         $user->setTelephone("0728756614");
         $user->setSiret("54u5th5t4jrjrjkt5");
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
        for ($i = 0; $i <= 20; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setRoles(["ROLE_APP"]);
            $user->setPassword($faker->md5); // 0123
            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);
            $user->setAdresse($faker->address);
            $user->setSession("CDA");
            $user->setTelephone($faker->phoneNumber);
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
            $user->setEmail($faker->companyEmail);
            $user->setRoles(["ROLE_ENT"]);
            $user->setPassword('000'); // 0123
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
