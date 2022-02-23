<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Fixture Apprenant 1
        $user = new User();
        $user->setEmail("toto@titi.fr");
        $user->setRoles(["ROLE_APP"]);
        $user->setPassword('$2y$13$Td/hy38QDVNeXhaQIz.jZOU23o0HVOe8LDLuYAK9aXQDYeNLff5aO'); // 9876
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
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        // Fixture Apprenant 2
        $user = new User();
        $user->setEmail("app@deux.fr");
        $user->setRoles(["ROLE_APP"]);
        $user->setPassword('$2y$13$Td/hy38QDVNeXhaQIz.jZOU23o0HVOe8LDLuYAK9aXQDYeNLff5aO'); // 0123
        $user->setNom("Name");
        $user->setPrenom("Surname");
        $user->setAdresse("45 rue du champ");
        $user->setSession("DWWM");
        $user->setTelephone("0548156514");
        $user->setDiplome("bac+5");
        $user->setDateNaissance(new \DateTime());
        $user->setGenre("F");
        $user->setRepresentantLegal1("Toto");
        $user->setRepresentantLegal2("Tata");
        $user->setNIR("545ehrr5h5");
        $user->setDepNaissance("Nord");
        $user->setCommuneNaissance("Lille");
        $user->setNationalite("Française");
        $user->setTravailleurHandicape("Oui");
        $user->setSportifHautNiveau(false);
        $user->setSituationAvantContrat("Chomage");
        $user->setDernierDiplome("bac+5");
        $user->setDerniereClasse("ce1");
        $user->setDiplomePlusHaut("bac+5");
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        // Fixture Entreprise 1
        $user = new User();
        $user->setEmail("my@entreprise.fr");
        $user->setRoles(["ROLE_ENT"]);
        $user->setPassword('$2y$13$Td/hy38QDVNeXhaQIz.jZOU23o0HVOe8LDLuYAK9aXQDYeNLff5aO'); // 0123
        $user->setRaisonSocial("Google");
        $user->setAdresse("45 rue du javascript");
        $user->setTelephone("0728756614");
        $user->setSiret("54u5th5t4jrjrjkt5");
        $user->setNAF("dj580");
        $user->setEffectif(500);
        $user->setConventionCollective("Convention collective");
        $user->setEmployeurPublic(false);
        $user->setCodeIDCCConvention("8905");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        // Fixture Entreprise 2
        $user = new User();
        $user->setEmail("your@entreprise.fr");
        $user->setRoles(["ROLE_ENT"]);
        $user->setPassword('$2y$13$Td/hy38QDVNeXhaQIz.jZOU23o0HVOe8LDLuYAK9aXQDYeNLff5aO'); // 0123
        $user->setRaisonSocial("Twitter");
        $user->setAdresse("45 rue du script");
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

        // Fixture Indépendant
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

        // Fixture Maître d'apprentissage 1
        $user = new User();
        $user->setEmail("the@maitre.fr");
        $user->setRoles(["ROLE_MA"]);
        $user->setPassword('$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96'); // 0000
        $user->setNom("Iam");
        $user->setPrenom("Zorro");
        $user->setTelephone("0604274604");
        $user->setDateNaissance(new \DateTime());
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setFonctionMA("dev");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        // Fixture Maître d'apprentissage 2
        $user = new User();
        $user->setEmail("le@maitre.fr");
        $user->setRoles(["ROLE_MA"]);
        $user->setPassword('$2y$13$kvy/WURxT98Px/cM60DXZuIwGCH0gxDoD1OPA2xDSgPaowxzbnq96'); // 0000
        $user->setNom("D'apprentissage");
        $user->setPrenom("Maitre");
        $user->setTelephone("0604274604");
        $user->setDateNaissance(new \DateTime());
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setFonctionMA("devops");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        // Fixture Formateur 1
        $user = new User();
        $user->setEmail("xavier@gmail.fr");
        $user->setRoles(["ROLE_FORMATEUR"]);
        $user->setPassword('$2y$13$pmUyYAeOOJqhq2lBadhRpOM4BmIV8ttyZURModBZ26za4WEimKS4i'); // 456
        $user->setNom("Frite");
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

        // Fixture Formateur 2
        $user = new User();
        $user->setEmail("formateur@gmail.fr");
        $user->setRoles(["ROLE_FORMATEUR"]);
        $user->setPassword('$2y$13$pmUyYAeOOJqhq2lBadhRpOM4BmIV8ttyZURModBZ26za4WEimKS4i'); // 456
        $user->setNom("Form");
        $user->setPrenom("Ateur");
        $user->setAdresse("12 rue de la frite");
        $user->setTelephone("0812654251");
        $user->setDiplome("bac+15");
        $user->setDateNaissance(new \DateTime());
        $user->setGenre("F");
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        // Fixture Organisme de formation 1
        $user = new User();
        $user->setEmail("foreach@academy.fr");
        $user->setRoles(["ROLE_OF"]);
        $user->setPassword('$2y$13$psh41BRs9DM2NbQbmswERufwjiWzX8WNqjGvIFgqGimHTNunlGSHm'); // 789
        $user->setSiret("rr4ntrg45");
        $user->setCFA(false);
        $user->setAdresse("393 Rue du général de Gaulle");
        $user->setTelephone("0344215457");
        $user->setDenominationCFAResponsable("Foreach Academy");
        $user->setNumeroUAICFA("dgjd66sd");
        $user->setDiplomeVise("developpeur web et web mobile");
        $user->setIntitulePreciDiplomevise("Titre Professionnel de développeur web et web mobile");
        $user->setLinkedin("http://www.linkedin.com");
        $user->setGithub("http://www.github.com");
        $user->setSiteWebPro("http://www.mywebsite.com");
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        // Fixture Organisme de formation 2
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

        // Fixture Admin
        $user = new User();
        $user->setEmail("super@admin.fr");
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword('$2y$13$psh41BRs9DM2NbQbmswERufwjiWzX8WNqjGvIFgqGimHTNunlGSHm'); // 789
        $user->setRGPDOK(true);
        $user->setProfilEnabled(true);
        $manager->persist($user);

        $manager->flush();
    }
}
