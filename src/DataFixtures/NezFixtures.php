<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Nez;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class NezFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');
        for($i=1;$i<=5;$i++){
            $nez = new Nez();
            $nom = $faker->sentence($nbWords = 1, $variableNbWords = true);
            $prenom = $faker->sentence($nbWords = 1, $variableNbWords = true);
            $biographie = $faker->text($maxNbChars = 500) ;
            $photo = $faker->imageUrl(200,200);
            $nez-> setNom($nom)
                    -> setPrenom($prenom)
                    -> setBiographie($biographie)
                    -> setPhoto($photo);
            $manager->persist($nez);
            $manager->flush();
        }
    }
}
