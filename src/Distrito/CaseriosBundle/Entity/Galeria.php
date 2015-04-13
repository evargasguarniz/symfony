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
     * @ORM\Column(name="descripcionGaleria", type="text")
     */
    private $descripcionGaleria;

    /**
    * @var integer
     * @ORM\ManyToOne(targetEntity="Caserios")
     * @ORM\JoinColumn(name="caserios_id", nullable=false, referencedColumnName="id")
     **/
    protected $caserios_id;

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
     * Set descripcionGaleria
     *
     * @param string $descripcionGaleria
     * @return Galeria
     */
    public function setDescripcionGaleria($descripcionGaleria)
    {
        $this->descripcionGaleria = $descripcionGaleria;

        return $this;
    }

    /**
     * Get descripcionGaleria
     *
     * @return string 
     */
    public function getDescripcionGaleria()
    {
        return $this->descripcionGaleria;
    }

    /**
     * Set caserios_id
     *
     * @param \Distrito\CaseriosBundle\Entity\Caserios $caseriosId
     * @return Galeria
     */
    public function setCaseriosId(\Distrito\CaseriosBundle\Entity\Caserios $caseriosId)
    {
        $this->caserios_id = $caseriosId;

        return $this;
    }

    /**
     * Get caserios_id
     *
     * @return \Distrito\CaseriosBundle\Entity\Caserios 
     */
    public function getCaseriosId()
    {
        return $this->caserios_id;
    }

    public function __toString()
    {
        return $this->imgGaleria;
    }
}
