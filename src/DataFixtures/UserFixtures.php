<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $role = new Role();
        $role->setName('apprenant');
       
        $manager->persist($role);

        $role = new Role();
        $role->setName('formateur');
       
        $manager->persist($role);

        $role = new Role();
        $role->setName('entreprise');
       
        $manager->persist($role);

        $role = new Role();
        $role->setName('OF');
       
        $manager->persist($role);

        $role = new Role();
        $role->setName('maitre');
       
        $manager->persist($role);

        $manager->flush();
    }
}
