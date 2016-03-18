<?php

namespace FrontBundle\Service;


use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use FrontBundle\Entity\Gamme;
use FrontBundle\Entity\User;
use FrontBundle\Entity\Vehicule;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Created by PhpStorm.
 * User: sylva
 * Date: 17/03/2016
 * Time: 21:13
 */
class Surclassement
{
    private $em;


    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }


    public function isSurclassable(Vehicule $vehicule, User $user)
    {
        $entity = $this->getSuperiorGamme($vehicule);

        return $this->isIntervalDate($user) && $this->vehiculeWhiteGamme($vehicule) && $this->isGreatFifty($entity);
    }

    public function getSuperiorGamme(Vehicule $entity)
    {
        $classement = $entity->getGamme()->getClassement() + 1;

        /** @var Gamme $gamme */
        $gamme = $this->em->getRepository('FrontBundle:Gamme')->findOneBy(array('classement' => $classement));

        $vehicule = $this->em->getRepository('FrontBundle:Vehicule')->findOneBy(array('gamme' => $gamme));

        if($vehicule) {

            return $vehicule;

        }else{

            return $entity;
        }
    }
    
    public function isIntervalDate(User $user)
    {
        $reservations = $user->getReservations();
        $currentdate = new \DateTime('now');
        $currentdate->sub(new \DateInterval('P30D'));

        $actualReservation = 0;


        foreach($reservations as$reservation)
        {
            if ($reservation->getStartDate() > $currentdate)
            {
                $actualReservation ++;
            }
        }

        //var_dump($actualReservation); die;

        return $actualReservation > 2;

    }

    public function isMinusFeefteen(Vehicule $vehicule)
    {
        return $this->vehiculeWhiteGamme($vehicule) < 0.15;
    }

    public function isGreatFifty(Vehicule $vehicule)
    {
        return $this->vehiculeWhiteGamme($vehicule) > 0.5;
    }

    public function vehiculeWhiteGamme(Vehicule $entity)
    {
        /** @var Vehicule $vehicules */
        $vehicules = $this->em->getRepository('FrontBundle:Vehicule')
            ->findBy(array('gamme' => $entity->getGamme()));

        $entities = count($vehicules);

        $numberVehicule = 0;

        foreach ($vehicules as $vehicule)
        {
            /** @var Vehicule $vehicule */
            if($vehicule->getIsDisponible())
            {
                $numberVehicule++;
            }
        }

        return $numberVehicule / $entities;
    }

}