<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Competence;


class CompetencesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            $competence = new Competence();
            $competence->setName("Capacité d'adaptation.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Gestion du stress.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Travail en équipe.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Sens de l'organisation.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Autonomie.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
           
            $competence = new Competence();
            $competence->setName("Maquetter une application.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Réaliser une interface utilisateur web statique et adaptable.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Développer une interface utilisateur web dynamique.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Créer une base de données.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Développer les composants d'accès aux données.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Développer la partie back-end d'une application web ou web mobile.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $competence = new Competence();
            $competence->setName("Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce.");
            $competence->setIdFormation(1);
            $manager->persist($competence);
    
            $manager->flush();
    }
}
