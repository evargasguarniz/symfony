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
     * @var string
     * @ORM\Column(name="Imagencaserio", type="text")
     */
    private $Imagencaserio;

     /**
     * @var string
     * @ORM\Column(name="Video_1", type="text")
     */
    private $Video_1;
    /**
     * @var string
     * @ORM\Column(name="Video_2", type="text")
     */
    private $Video_2;

    /**
     * @var string
     * @ORM\Column(name="Video_3", type="text")
     */
    private $Video_3;
    /**
     * @var string
     * @ORM\Column(name="Video_4", type="text")
     */
    private $Video_4;

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
     * Set Imagencaserio
     *
     * @param string $imagencaserio
     * @return Caserios
     */
    public function setImagencaserio($imagencaserio)
    {
        $this->Imagencaserio = $imagencaserio;

        return $this;
    }

    /**
     * Get Imagencaserio
     *
     * @return string 
     */
    public function getImagencaserio()
    {
        return $this->Imagencaserio;
    }

    /**
     * Set Video_1
     *
     * @param string $video1
     * @return Caserios
     */
    public function setVideo1($video1)
    {
        $this->Video_1 = $video1;

        return $this;
    }

    /**
     * Get Video_1
     *
     * @return string 
     */
    public function getVideo1()
    {
        return $this->Video_1;
    }

    /**
     * Set Video_2
     *
     * @param string $video2
     * @return Caserios
     */
    public function setVideo2($video2)
    {
        $this->Video_2 = $video2;

        return $this;
    }

    /**
     * Get Video_2
     *
     * @return string 
     */
    public function getVideo2()
    {
        return $this->Video_2;
    }

    /**
     * Set Video_3
     *
     * @param string $video3
     * @return Caserios
     */
    public function setVideo3($video3)
    {
        $this->Video_3 = $video3;

        return $this;
    }

    /**
     * Get Video_3
     *
     * @return string 
     */
    public function getVideo3()
    {
        return $this->Video_3;
    }

    public function setVideo4($video4)
    {
        $this->Video_4 = $video4;

        return $this;
    }

    /**
     * Get Video_3
     *
     * @return string 
     */
    public function getVideo4()
    {
        return $this->Video_4;
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

     public function __toString()
    {
        return $this->nombre;
    }
}
