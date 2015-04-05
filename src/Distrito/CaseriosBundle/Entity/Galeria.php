<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galeria
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Galeria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="imgGaleria", type="string" )
     */
    private $imgGaleria;

     /**
     * @var text
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="Caserios")
     * @ORM\JoinColumn(name="Caserios_id", nullable=false, referencedColumnName="id")
     **/
    private $Caserios;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

   

    /**
     * Set imgGaleria
     *
     * @param string $imgGaleria
     * @return Galeria
     */
    public function setImgGaleria($imgGaleria)
    {
        $this->imgGaleria = $imgGaleria;

        return $this;
    }

    /**
     * Get imgGaleria
     *
     * @return string 
     */
    public function getImgGaleria()
    {
        return $this->imgGaleria;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Galeria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set Caserios
     *
     * @param \Distrito\CaseriosBundle\Entity\Caserios $caserios
     * @return Galeria
     */
    public function setCaserios(\Distrito\CaseriosBundle\Entity\Caserios $caserios)
    {
        $this->Caserios = $caserios;

        return $this;
    }

    /**
     * Get Caserios
     *
     * @return \Distrito\CaseriosBundle\Entity\Caserios 
     */
    public function getCaserios()
    {
        return $this->Caserios;
    }

    
}
