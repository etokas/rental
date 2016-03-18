<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\User;
use FrontBundle\Entity\Vehicule;
use FrontBundle\Service\Surclassement;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FrontBundle\Entity\Reservation;
use FrontBundle\Form\ReservationType;

/**
 * Reservation controller.
 *
 * @Route("/reservation")
 */
class ReservationController extends Controller
{
    /**
     * Lists all Reservation entities.
     *
     * @Route("/", name="reservation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('FrontBundle:Reservation')->findBy(array(), array('createAt' => 'DESC'));
        $nombreUser = $em->getRepository('FrontBundle:User')->findAll();
        $nombreVehicule = $em->getRepository('FrontBundle:Vehicule')->findAll();



        return $this->render('FrontBundle:reservation:index.html.twig', array(
            'reservations' => $reservations,
            'nombre' => count($nombreUser) == 0 && count($nombreVehicule) == 0,
        ));
    }

    /**
     * Creates a new Reservation entity.
     *
     * @Route("/new", name="reservation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Reservation $reservation */
        $reservation = new Reservation();
        $form = $this->createForm('FrontBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = $reservation->getUser()->getLastname();

            $voiture = $reservation->getVoiture();

            /** @var User $entity */
            $entity = $em->getRepository('FrontBundle:User')->findOneBy(array('lastname' => $user));

            /** @var Vehicule $entity */
            $vehicule = $em->getRepository('FrontBundle:Vehicule')->find($voiture->getId());


            /** Test UPGRADE */

            $surclasse = new Surclassement($em);

            /*
            $res1 = $surclasse->vehiculeWhiteGamme($vehicule);

            var_dump($res1);

            $res2 = $surclasse->isIntervalDate($entity);

            var_dump($res2);

            $minus = $surclasse->isMinusFeefteen($vehicule);

            var_dump($minus);

            $minus2 = $surclasse->isGreatFifty($vehicule);

            var_dump($minus2);
*/


            /** End TEST UPGRADE */


            $vehicule->setIsDisponible(false);

            $entity->addReservation($reservation);

            $reservation->setCreateAt(new \DateTime('now'));
            $em->persist($entity);
            $em->persist($vehicule);
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }

        return $this->render('FrontBundle:reservation:new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reservation entity.
     *
     * @Route("/{id}", name="reservation_show")
     * @Method("GET")
     */
    public function showAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('FrontBundle:reservation:show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reservation entity.
     *
     * @Route("/{id}/edit", name="reservation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('FrontBundle\Form\ReservationType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservation_edit', array('id' => $reservation->getId()));
        }

        return $this->render('FrontBundle:reservation:edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Reservation entity.
     *
     * @Route("/{id}", name="reservation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reservation $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a Reservation entity.
     *
     * @param Reservation $reservation The Reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     * @Route("/{vehicule}/{user}", name="user_is_surclassable", options={"expose"=true})
     */
    public function exposedAction($vehicule, $user)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('FrontBundle:User')->find($user);

        $vehicule = $em->getRepository('FrontBundle:Vehicule')->find($vehicule);


        $surclassement = new Surclassement($em);

        $bool = $surclassement->isSurclassable($vehicule, $user);

        $res = array('user' => $user->getLastName(),
            'bool' => $bool);

        return new JsonResponse($res);
    }
}
