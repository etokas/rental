<?php

namespace FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FrontBundle\Entity\Vehicule;
use FrontBundle\Form\VehiculeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


/**
 * Vehicule controller.
 *
 * @Route("/vehicule")
 */
class VehiculeController extends Controller
{
    /**
     * Lists all Vehicule entities.
     *
     * @Route("/", name="vehicule_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vehicules = $em->getRepository('FrontBundle:Vehicule')->findAll();

        return $this->render('FrontBundle:vehicule:index.html.twig', array(
            'vehicules' => $vehicules,
        ));
    }

    /**
     * Creates a new Vehicule entity.
     *
     * @Route("/new", name="vehicule_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $vehicule = new Vehicule();
        $form = $this->createForm('FrontBundle\Form\VehiculeType', $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vehicule);
            $em->flush();

            return $this->redirectToRoute('vehicule_show', array('id' => $vehicule->getId()));
        }

        return $this->render('FrontBundle:vehicule:new.html.twig', array(
            'vehicule' => $vehicule,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Vehicule entity.
     *
     * @Route("/{id}", name="vehicule_show")
     * @Method("GET")
     */
    public function showAction(Vehicule $vehicule)
    {
        $deleteForm = $this->createDeleteForm($vehicule);

        return $this->render('FrontBundle:vehicule:show.html.twig', array(
            'vehicule' => $vehicule,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Vehicule entity.
     *
     * @Route("/{id}/edit", name="vehicule_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Vehicule $vehicule)
    {
        $deleteForm = $this->createDeleteForm($vehicule);
        $editForm = $this->createForm('FrontBundle\Form\VehiculeType', $vehicule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vehicule);
            $em->flush();

            return $this->redirectToRoute('vehicule_edit', array('id' => $vehicule->getId()));
        }

        return $this->render('FrontBundle:vehicule:edit.html.twig', array(
            'vehicule' => $vehicule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Vehicule entity.
     *
     * @Route("/{id}/edit_color", name="vehicule_edit_color")
     * @Method({"GET", "PATCH"})
     */
    public function editColorAction(Request $request, Vehicule $vehicule)
    {

        $em = $this->getDoctrine()->getManager();
        $form = $this->createFormBuilder($vehicule)
            ->setMethod('PATCH')
            ->add('color')
            ->add('update', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($vehicule);
            $em->flush();

            return $this->redirectToRoute('vehicule_index');
        }

       return $this->render('FrontBundle:vehicule:edit_color.html.twig', array('form' => $form->createView()));
    }


    /**
     * Deletes a Vehicule entity.
     *
     * @Route("/{id}", name="vehicule_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Vehicule $vehicule)
    {
        $form = $this->createDeleteForm($vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vehicule);
            $em->flush();
        }

        return $this->redirectToRoute('vehicule_index');
    }



    /**
     * Creates a form to delete a Vehicule entity.
     *
     * @param Vehicule $vehicule The Vehicule entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vehicule $vehicule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vehicule_delete', array('id' => $vehicule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
