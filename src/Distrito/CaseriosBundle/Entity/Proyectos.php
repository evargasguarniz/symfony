<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyectos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Proyectos
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
     * @ORM\Column(name="idCaserio", type="integer")
     */
    private $idCaserio;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreProyecto", type="string", length=255)
     */
    private $nombreProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="Costructora", type="string", length=255)
     */
    private $costructora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicio", type="date")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaFin", type="date")
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Ubicacion", type="string", length=255)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;

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
     * @return Proyectos
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
     * Set nombreProyecto
     *
     * @param string $nombreProyecto
     * @return Proyectos
     */
    public function setNombreProyecto($nombreProyecto)
    {
        $this->nombreProyecto = $nombreProyecto;

        return $this;
    }

    /**
     * Get nombreProyecto
     *
     * @return string 
     */
    public function getNombreProyecto()
    {
        return $this->nombreProyecto;
    }

    /**
     * Set costructora
     *
     * @param string $costructora
     * @return Proyectos
     */
    public function setCostructora($costructora)
    {
        $this->costructora = $costructora;

        return $this;
    }

    /**
     * Get costructora
     *
     * @return string 
     */
    public function getCostructora()
    {
        return $this->costructora;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyectos
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Proyectos
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Proyectos
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyectos
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
}
