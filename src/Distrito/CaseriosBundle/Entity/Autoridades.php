<?php

namespace Distrito\CaseriosBundle\Entity;
namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Autoridades
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Autoridades
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
     * @ORM\Column(name="NombreAutoridad", type="string", length=255)
     */
    private $nombreAutoridad;

    /**
     * @var string
     *
     * @ORM\Column(name="Cargo", type="string", length=255)
     */
    private $cargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dni", type="integer")
     */
    private $dni;

    /**
     * @var integer
     *
     * @ORM\Column(name="Edad", type="integer")
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="GradoEstudio", type="string", length=255)
     */
    private $gradoEstudio;

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
     * Set idCaserio
     *
     * @param integer $idCaserio
     * @return Autoridades
     */
    public function setIdCaserio($idCaserio)
    {
        $this->idCaserio = $idCaserio;

        return $this;
    }

    /**
     * Get idCaserio
     *
     * @return integer 
     */
    public function getIdCaserio()
    {
        return $this->idCaserio;
    }

    /**
     * Set nombreAutoridad
     *
     * @param string $nombreAutoridad
     * @return Autoridades
     */
    public function setNombreAutoridad($nombreAutoridad)
    {
        $this->nombreAutoridad = $nombreAutoridad;

        return $this;
    }

    /**
     * Get nombreAutoridad
     *
     * @return string 
     */
    public function getNombreAutoridad()
    {
        return $this->nombreAutoridad;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return Autoridades
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set dni
     *
     * @param integer $dni
     * @return Autoridades
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return integer 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Autoridades
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Autoridades
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
     * Set gradoEstudio
     *
     * @param string $gradoEstudio
     * @return Autoridades
     */
    public function setGradoEstudio($gradoEstudio)
    {
        $this->gradoEstudio = $gradoEstudio;

        return $this;
    }

    /**
     * Get gradoEstudio
     *
     * @return string 
     */
    public function getGradoEstudio()
    {
        return $this->gradoEstudio;
    }

    public function __toString()
    {
        return $this->nombreAutoridad;
    }
   
}
