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
        $user = new User();
        $user->setEmail("the@maitre.fr");
        $user->setRoles(["ROLE_MA"]);
        $user->setPassword('$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96'); // 0000
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
        $user->setPassword('$2y$13$pmUyYAeOOJqhq2lBadhRpOM4BmIV8ttyZURModBZ26za4WEimKS4i'); // 456
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
        $user->setPassword('$2y$13$psh41BRs9DM2NbQbmswERufwjiWzX8WNqjGvIFgqGimHTNunlGSHm'); // 789
        $user->setNom("Foreach Academy");
        $user->setAdresse("393 Rue du général de Gaulle");
        $user->setTelephone("0342215457");
        $user->setCFA(true);
        $user->setDenominationCFAResponsable("foreachacademy - symbolit");
        $user->setNumeroUAICFA("dgjd66sd");
        $manager->persist($user);

        // Fixture Admin
        $user = new User();
        $user->setEmail("super@admin.fr");
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword('$2y$13$psh41BRs9DM2NbQbmswERufwjiWzX8WNqjGvIFgqGimHTNunlGSHm'); // 789
        $manager->persist($user);           

        // Fixture Apprenant
        $user = [];
        for ($i=0; $i <= 20; $i++)
        {
        $user[$i] = new User();
        $user[$i]->setEmail($faker->email);
        $user[$i]->setRoles(["ROLE_APP"]);
        $user[$i]->setPassword($faker->md5); // 0123
        $user[$i]->setNom($faker->lastName);
        $user[$i]->setPrenom($faker->firstName);
        $user[$i]->setAdresse($faker->address);
        $user[$i]->setSession("CDA");
        $user[$i]->setTelephone($faker->phoneNumber);
        $user[$i]->setDiplome("bac+5");
        $user[$i]->setDateNaissance($faker->dateTimeBetween($startDate = '-25 years', $endDate = '-20 years', $timezone = null));
        $user[$i]->setGenre("M");
        $user[$i]->setNIR("545ehrr5h5");
        $user[$i]->setDepNaissance($faker->departmentName);
        $user[$i]->setCommuneNaissance($faker->city);
        $user[$i]->setNationalite("Française");
        $user[$i]->setTravailleurHandicape("Non");
        $user[$i]->setSportifHautNiveau($faker->boolean);
        $user[$i]->setSituationAvantContrat("Chomage");
        $user[$i]->setDernierDiplome("bac+5");
        $user[$i]->setDerniereClasse("ce1");
        $user[$i]->setDiplomePlusHaut("bac+5");
        $user[$i]->setDiplomeVise("Concepteur developpeur d'applications");
        $user[$i]->setIntitulePreciDiplomevise("Titre professionnel de concepteur et développeur d'applications");

        }
       
        

        // Fixture Entreprise
        $user = [];
        for ($j=0; $j <= 20; $j++)
        { 
        $user[$j] = new User();
        $user[$j]->setEmail($faker->companyEmail);
        $user[$j]->setRoles(["ROLE_ENT"]); 
        $user[$j]->setPassword($faker->md5); // 0123
        $user[$j]->setNom($faker->company);
        $user[$j]->setAdresse($faker->address);
        $user[$j]->setTelephone($faker->phoneNumber);
        $user[$j]->setSiret($faker->siret);
        $user[$j]->setNAF("dj580");
        $user[$j]->setEffectif($faker->numberBetween($min = 1, $max = 9000));
        $user[$j]->setConventionCollective("Convention collective 66");
        $user[$j]->setEmployeurPublic($faker->boolean);
        $user[$j]->setCodeIDCCConvention("8905");
        $manager->persist($user[$j]);
        }
        $manager->flush();
    }
}
