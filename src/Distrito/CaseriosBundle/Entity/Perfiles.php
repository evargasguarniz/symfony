<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfiles
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Perfiles
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
     * @ORM\Column(name="NombrePerfil", type="string", length=255)
     */
    private $nombrePerfil;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text")
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
     * Set nombrePerfil
     *
     * @param string $nombrePerfil
     * @return Perfiles
     */
    public function setNombrePerfil($nombrePerfil)
    {
        $this->nombrePerfil = $nombrePerfil;

        return $this;
    }

    /**
     * Get nombrePerfil
     *
     * @return string 
     */
    public function getNombrePerfil()
    {
        return $this->nombrePerfil;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Perfiles
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
