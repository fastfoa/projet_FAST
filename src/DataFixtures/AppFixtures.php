<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;
use App\Entity\Competences;





class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $f = new Formation();
        $f->setNom("DWWM");
        $manager->persist($f);

        $f = new Formation();
        $f->setNom("CDA");
        $manager->persist($f);

        $f = new Formation();
        $f->setNom("Bachelor");
        $manager->persist($f);

       

        $competence = new Competences();
        $competence->setName("Gestion du stress.");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Travail en équipe.");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Sens de l'organisation.");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Autonomie");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Réaliser une interface utilisateur web statique et adaptable.");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Développer une interface utilisateur web dynamique.");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce.");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Créer une base de données.");
        $manager->persist($competence); 
        
        $competence = new Competences();
        $competence->setName("Développer les composants d'accès aux données.");
        $manager->persist($competence); 
        
    
        $manager->flush();
    }
}
