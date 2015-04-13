<?php

namespace Distrito\CaseriosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Distrito\CaseriosBundle\Entity\Galeria;
use Distrito\CaseriosBundle\Entity\Caserios;
use Symfony\Component\HttpFoundation\File;

class CaseriosDistritoController extends Controller
{
	/*
	*Funcion para el index
	*/
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('DistritoCaseriosBundle:Caserios')->findAll();*/

        $em = $this->getDoctrine()->getManager();
        /*
        $query = $em->createQuery(
            "SELECT  c.id, c.nombre,c.descripcion,g.imgGaleria FROM DistritoCaseriosBundle:Caserios c 
            INNER JOIN c.galeria g WITH  g.caserios_id = c.id  GROUP BY c.id ORDER BY c.nombre  ASC"   
            );
            */
        $query = $em->createQuery(
            "SELECT  c.id, c.nombre,c.descripcion,c.Imagencaserio FROM DistritoCaseriosBundle:Caserios c"   
            );
        
           $entity = $query->getResult();
            /*traer imagenes de slider */
            $query = $em->createQuery(
                "SELECT g.Imagencaserio,g.descripcion FROM DistritoCaseriosBundle:Caserios g"
                );

            $gallery = $query->getResult();

        return $this->render('DistritoCaseriosBundle:CaseriosDistrito:caserio.html.twig',array(
            'entity'=>$entity,
            'gallery'=>$gallery,
            ));
    }

    public function detalleAction($id){
        $em = $this->getDoctrine()->getManager();
         /*esta consulta trae todos los caserios */
         $query= $em->createQuery(
            'SELECT c.id,c.nombre FROM DistritoCaseriosBundle:Caserios c'
            );
         $queryall =$query->getResult();
        /*esta consulta trae el detalle del caserio */
        
        $query = $em->createQuery(
            "SELECT c.id, c.nombre,c.Imagencaserio,c.descripcion,c.Video_1,c.Video_2,c.Video_3,c.Video_4 FROM DistritoCaseriosBundle:Caserios c
            WHERE c.id=$id"
            );
        $entity = $query->getResult();
        /*esta consulta trae imagenes de la galeria del caserio */
        $query = $em->createQuery(
            "SELECT g.imgGaleria FROM DistritoCaseriosBundle:Galeria g
            WHERE g.caserios_id=$id"
            );


        $queryg = $query->getResult();
        return $this->render('DistritoCaseriosBundle:CaseriosDistrito:detallecaserio.html.twig',array(
            'queryall'=> $queryall,
            'entity'=>$entity,
            'queryg'=>$queryg,
            ));
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
