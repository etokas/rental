<?php

namespace FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FrontBundle\Entity\Gamme;


class LoadCarData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $gamme = new Gamme();
        $gamme->setNom('TieFighter');
        $gamme->setClassement(Gamme::HAUT);

        $gamme2 = new Gamme();
        $gamme2->setNom('XWing');
        $gamme2->setClassement(Gamme::BAS);

        $manager->persist($gamme);
        $manager->persist($gamme2);

        $manager->flush();

    }

}