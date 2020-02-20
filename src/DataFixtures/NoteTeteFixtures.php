<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\NoteTete;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class NoteTeteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');
        for($i=1;$i<=5;$i++){
            $noteTete = new NoteTete();
            $nom = $faker->sentence($nbWords = 1, $variableNbWords = true);
            $description = $faker->text($maxNbChars = 1000) ;
            $obtention = $faker->word;
            $origine = $faker->word;
            $image = $faker->imageUrl(200,200);
            $noteTete-> setNom($nom)
                    -> setDescription($description)
                    -> setObtention($obtention)
                    -> setOrigine($origine)
                    -> setImage($image);
            $manager->persist($noteTete);
            $manager->flush();
        }
    }
}
