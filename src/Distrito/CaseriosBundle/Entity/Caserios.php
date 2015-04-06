<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Caserios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Caserios
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
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    private $fecha;

    /**
     * @ORM\OneToMany(targetEntity="Autoridades", mappedBy="Caserios")
     **/
    private $Autoridades;

    /**
    * @var integer
     * @ORM\OneToMany(targetEntity="Galeria", mappedBy="caserios_id")
     **/
    protected $galeria;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Autoridades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->galeria = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nombre
     *
     * @param string $nombre
     * @return Caserios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Caserios
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Caserios
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Add Autoridades
     *
     * @param \Distrito\CaseriosBundle\Entity\Autoridades $autoridades
     * @return Caserios
     */
    public function addAutoridade(\Distrito\CaseriosBundle\Entity\Autoridades $autoridades)
    {
        $this->Autoridades[] = $autoridades;

        return $this;
    }

    /**
     * Remove Autoridades
     *
     * @param \Distrito\CaseriosBundle\Entity\Autoridades $autoridades
     */
    public function removeAutoridade(\Distrito\CaseriosBundle\Entity\Autoridades $autoridades)
    {
        $this->Autoridades->removeElement($autoridades);
    }

    /**
     * Get Autoridades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAutoridades()
    {
        return $this->Autoridades;
    }

    /**
     * Add galeria
     *
     * @param \Distrito\CaseriosBundle\Entity\Galeria $galeria
     * @return Caserios
     */
    public function addGalerium(\Distrito\CaseriosBundle\Entity\Galeria $galeria)
    {
        $this->galeria[] = $galeria;

        return $this;
    }

    /**
     * Remove galeria
     *
     * @param \Distrito\CaseriosBundle\Entity\Galeria $galeria
     */
    public function removeGalerium(\Distrito\CaseriosBundle\Entity\Galeria $galeria)
    {
        $this->galeria->removeElement($galeria);
    }

    /**
     * Get galeria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGaleria()
    {
        return $this->galeria;
    }

    /*metodos magicos*/

    public function __toString(){
        return  $this->nombre;
    }

}
