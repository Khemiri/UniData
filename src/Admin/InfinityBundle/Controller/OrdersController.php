<?php

namespace Admin\InfinityBundle\Controller;

use Admin\InfinityBundle\Entity\Purchase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Utiles\ImageUploadBundle\Models\Document;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Admin\InfinityBundle\Entity\Orders;
use Admin\InfinityBundle\Form\OrdersType;

/**
 * Orders controller.
 *
 * @Route("/orders")
 */
class OrdersController extends Controller
{

    /**
     * Lists all Orders entities.
     *
     * @Route("/", name="orders")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InfinityBundle:Orders')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Orders entity.
     *
     * @Route("/", name="orders_create")
     * @Method("POST")
     * @Template("InfinityBundle:Orders:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Orders();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('orders_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Orders entity.
     *
     * @param Orders $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Orders $entity)
    {
        $form = $this->createForm(new OrdersType(), $entity, array(
            'action' => $this->generateUrl('orders_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Orders entity.
     *
     * @Route("/new", name="orders_new")
     * @Template()
     */
    public function newAction()
    {
        $order = new Orders();
        $form = $this->createForm(new OrdersType(), $order);
        $request = $this->getRequest();


        if($request->getMethod() === "POST"){

            $status = 'succes';
            $uploadedURL = '';
            $image = $request->files->get('img');
            $message = '';

            if(($image instanceof UploadedFile) && ($image->getError() == '0'))
            {
                if($image->getSize() < 20000000){

                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array)-1];
                    $valid_filetypes = array('pdf');

                    if(in_array(strtolower($file_type), $valid_filetypes)){
                        $document = new Document();
                        $document->setFile($image);
                        $document->setSubDirectory('uploads');
                        $document->processFile();

                        $form->bind($request);

                        if($form->isValid()){
                            $order->setPathFile($document->getFilePersistencePath());

                            $order->setDate(new \DateTime($request->get('date')));
                            $order->setDatePrevu(new \DateTime($request->get('datePrevu')));

                            $order->getPurchase()->setDate(new \DateTime($request->get('datelc')));

                            /*
                                $purchase = new Purchase();
                                $purchase->setDate(new \DateTime($request->get('datelc')));

                                $order->setPurchase($purchase);
                            */

                            $em = $this->getDoctrine()->getManager();
                            $em->persist($order);
                            $em->flush();

                            $status  = 'Success';
                            $message = 'Ajouter avec succées';
                        }

                    }
                    else{
                        $status  = 'Failed';
                        $message = 'Invalid File Type';
                    }

                }
                else{
                    $status  = 'Failed';
                    $message = 'size exceeds limit';
                }
            }
            else{
                $status  = 'Failed';
                $message = 'File Error --- ';
            }

            return $this->render('InfinityBundle:Orders:new.html.twig', array(
                'entity'      => $order,
                'form'        => $form->createView(),
                'status'      => $status,
                'message'     => $message,
                'uploadedURL' => $uploadedURL
            ));
        }
        return $this->render('InfinityBundle:Orders:new.html.twig', array(
            'entity' => $order,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Orders entity.
     *
     * @Route("/{id}", name="orders_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InfinityBundle:Orders')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orders entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Orders entity.
     *
     * @Route("/{id}/edit", name="orders_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InfinityBundle:Orders')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orders entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Orders entity.
    *
    * @param Orders $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Orders $entity)
    {
        $form = $this->createForm(new OrdersType(), $entity, array(
            'action' => $this->generateUrl('orders_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Orders entity.
     *
     * @Route("/{id}", name="orders_update")
     * @Method("PUT")
     * @Template("InfinityBundle:Orders:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InfinityBundle:Orders')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orders entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('orders_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Orders entity.
     *
     * @Route("/{id}", name="orders_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InfinityBundle:Orders')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Orders entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('orders'));
    }

    /**
     * Creates a form to delete a Orders entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orders_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
