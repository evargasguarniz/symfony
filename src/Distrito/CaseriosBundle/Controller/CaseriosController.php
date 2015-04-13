<?php

namespace Distrito\CaseriosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Distrito\CaseriosBundle\Entity\Caserios;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Distrito\CaseriosBundle\Form\CaseriosType;

/**
 * Caserios controller.
 *
 */
class CaseriosController extends Controller
{

    /**
     * Lists all Caserios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DistritoCaseriosBundle:Caserios')->findAll();

        return $this->render('DistritoCaseriosBundle:Caserios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Caserios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Caserios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('caserios_show', array('id' => $entity->getId())));
        }

        return $this->render('DistritoCaseriosBundle:Caserios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Caserios entity.
     *
     * @param Caserios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Caserios $entity)
    {
        $form = $this->createForm(new CaseriosType(), $entity, array(
            'action' => $this->generateUrl('caserios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Caserios entity.
     *
     */
    public function newAction()
    {
        $entity = new Caserios();
        $form   = $this->createCreateForm($entity);

        return $this->render('DistritoCaseriosBundle:Caserios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Caserios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritoCaseriosBundle:Caserios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caserios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DistritoCaseriosBundle:Caserios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Caserios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritoCaseriosBundle:Caserios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caserios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DistritoCaseriosBundle:Caserios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Caserios entity.
    *
    * @param Caserios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Caserios $entity)
    {
        $form = $this->createForm(new CaseriosType(), $entity, array(
            'action' => $this->generateUrl('caserios_update', array('id' => $entity->getId())),
            //'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Caserios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistritoCaseriosBundle:Caserios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caserios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('caserios', array('id' => $id)));
        }

        return $this->render('DistritoCaseriosBundle:Caserios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Caserios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DistritoCaseriosBundle:Caserios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Caserios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('caserios'));
    }

    /**
     * Creates a form to delete a Caserios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('caserios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
