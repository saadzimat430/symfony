<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\These;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class TheseFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $this->loadTheses($manager);
    }

    private function loadTheses(ObjectManager $manager)
    {
        for ($i=1; $i < 5; $i++) { 
            $these = new These();
            $these -> setIntitule("These doctorat n $i"); 
            $these -> setAnnee(new \DateTime());
            $these -> setDomaine("Philosophie");
            $manager -> persist($these);
        }
        $manager->flush();
    }

}