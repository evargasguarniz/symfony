<?php

namespace Distrito\CaseriosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CaseriosDistritoController extends Controller
{
	/*
	*Funcion para el index
	*/
    public function indexAction()
    {
        return $this->render('DistritoCaseriosBundle:CaseriosDistrito:caserio.html.twig');
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
