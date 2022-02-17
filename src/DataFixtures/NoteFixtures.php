<?php

namespace App\DataFixtures;

use App\Entity\Note;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class NoteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $note = new Note();
        $note->setName("non-acquis");
        $manager->persist($note);

        $note = new Note();
        $note->setName("maitrise fragile");
        $manager->persist($note);

        $note = new Note();
        $note->setName("maitrise satisfaisante");
        $manager->persist($note)
        ;
        $note = new Note();
        $note->setName("maitrise très satisfaisante");
        $manager->persist($note);

        $note = new Note();
        $note->setName("non-évalué");
        $manager->persist($note);

        
        $manager->flush();
    }



}
