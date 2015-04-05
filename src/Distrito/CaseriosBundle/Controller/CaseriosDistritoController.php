<?php

namespace Distrito\CaseriosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Distrito\CaseriosBundle\Entity\Galeria;
use Distrito\CaseriosBundle\Entity\Caserios;

class CaseriosDistritoController extends Controller
{
	/*
	*Funcion para el index
	*/
    public function indexAction()
    {
        //$em = $this->getDoctrine()->getManager();
        //$entity = $em->getRepository('DistritoCaseriosBundle:Caserios')->findAll();

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            "SELECT c,p FROM DistritoCaseriosBundle:Caserios c 
            JOIN c.galeria p"
            );
            $entity = $query->getResult();
           
        return $this->render('DistritoCaseriosBundle:CaseriosDistrito:caserio.html.twig',array(
            'entity'=>$entity,
            ));
    }

    public function detalleAction(){
        return $this->render('DistritoCaseriosBundle:CaseriosDistrito:detallecaserio.html.twig');
    }
    /*
	* funcion para vista quienes somos
    */
    public function quienesAction()
    {
    	return $this->render('DistritoCaseriosBundle:CaseriosDistrito:quienes-somos.html.twig');
    }
    /*
	* funcion para vista del blog
    */
    public function blogAction()
    {
    	 return $this->render('DistritoCaseriosBundle:CaseriosDistrito:blog.html.twig');
    }
    /*
	* funcion para vista contacto
    */
    public function contactAction()
    {
    	return $this->render('DistritoCaseriosBundle:CaseriosDistrito:contact.html.twig');
    }
}
