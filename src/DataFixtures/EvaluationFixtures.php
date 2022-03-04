<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Evaluation;
use Faker;


class EvaluationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // composer require fzaninotto/faker
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $evaluation = new Evaluation();
            $evaluation->setIdCompetence($faker->numberBetween(1, 13));
            $evaluation->setIdApp($faker->numberBetween(1, 20));
            $evaluation->setIdMA($faker->numberBetween(101, 121));
            $evaluation->setIdFormateur($faker->numberBetween(201, 221));
            $evaluation->setIdSession($faker->numberBetween(1, 3));
            $evaluation->setDateApp($faker->dateTimeBetween('-1 years', 'now', $timezone = null));
            $evaluation->setDateMA($faker->dateTimeBetween('-1 years', 'now', $timezone = null));
            $evaluation->setDateFormateur($faker->dateTimeBetween('-1 years', 'now', $timezone = null));
            $evaluation->setDateOF($faker->dateTimeBetween('-1 years', 'now', $timezone = null));
            $evaluation->setNote($faker->numberBetween(5, 20));
            $evaluation->setRemarqueAPP($faker->text);
            $evaluation->setRemarqueFormateur($faker->text);
            $evaluation->setRemarqueMA($faker->text);
            $evaluation->setRemarqueOF($faker->text);
            $manager->persist($evaluation);
        }



        $manager->flush();
    }
}
