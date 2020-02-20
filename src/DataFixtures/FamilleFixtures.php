<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\FamilleOlfactive;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FamilleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $faker = Factory::create('FR-fr');
        for($i=1;$i<=5;$i++){
            $famille = new FamilleOlfactive();
            $nom = $faker->sentence($nbWords = 1, $variableNbWords = true);
            $description = $faker->text($maxNbChars = 1000) ;
            $famille-> setNom($nom)
                    -> setDescription($description);
            $manager->persist($famille);
            $manager->flush();
        }
     
    }
}
