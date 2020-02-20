<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Marque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MarqueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');
        for($i=1;$i<=5;$i++){
            $marque = new Marque();
            $nom = $faker->sentence($nbWords = 1, $variableNbWords = true);
            $logo = $faker->imageUrl(200,200);
            $description = $faker->text($maxNbChars = 200) ;
            $domaine = $faker->randomElement($array = array ('joaillier','parfumeur','couturier'));

            $marque-> setNom($nom)
                    -> setLogo($logo)
                    -> setDescription($description)
                    -> setDomaine($domaine);


                    $manager->persist($marque);

                    $manager->flush();


        }
     
      
    }
}
