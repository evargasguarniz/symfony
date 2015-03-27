<?php

namespace Distrito\CaseriosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CaseriosController extends Controller
{
	/*
	*Funcion para el index
	*/
    public function indexAction()
    {
        return $this->render('DistritoCaseriosBundle:Caserios:index.html.twig');
    }
    /*
	* funcion para vista quienes somos
    */
    public function quienesAction()
    {
    	return $this->render('DistritoCaseriosBundle:Caserios:quienes-somos.html.twig');
    }
    /*
	* funcion para vista del blog
    */
    public function blogAction()
    {
    	 return $this->render('DistritoCaseriosBundle:Caserios:blog.html.twig');
    }
    /*
	* funcion para vista contacto
    */
    public function contactAction()
    {
    	return $this->render('DistritoCaseriosBundle:Caserios:contact.html.twig');
    }
}
