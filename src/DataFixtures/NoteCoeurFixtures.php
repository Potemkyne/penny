<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\NoteCoeur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class NoteCoeurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');
        for($i=1;$i<=5;$i++){
            $noteCoeur = new NoteCoeur();
            $nom = $faker->sentence($nbWords = 1, $variableNbWords = true);
            $description = $faker->text($maxNbChars = 1000) ;
            $obtention = $faker->word;
            $origine = $faker->word;
            $image = $faker->imageUrl(200,200);
            $noteCoeur-> setNom($nom)
                    -> setDescription($description)
                    -> setObtention($obtention)
                    -> setOrigine($origine)
                    -> setImage($image);
            $manager->persist($noteCoeur);
            $manager->flush();
        }
    }
}
