<?php

namespace App\DataFixtures;

use App\Entity\Competences;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class CompetenceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $competences = new Competences();
        $competences->setCompetence("Capacité d'adaptation.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Gestion du stress.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Travail en équipe.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Sens de l'organisation.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Autonomie.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

       
        $competences = new Competences();
        $competences->setCompetence("Maquetter une application.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Réaliser une interface utilisateur web statique et adaptable.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Développer une interface utilisateur web dynamique.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Créer une base de données.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Développer les composants d'accès aux données.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Développer la partie back-end d'une application web ou web mobile.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $competences = new Competences();
        $competences->setCompetence("Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce.");
        $competences->setIdFormation(1);
        $manager->persist($competences);

        $manager->flush();
    }



}
