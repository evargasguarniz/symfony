<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deportes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Deportes
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
     * @ORM\Column(name="NombreDeporte", type="string", length=255)
     */
    private $nombreDeporte;

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
     * Set nombreDeporte
     *
     * @param string $nombreDeporte
     * @return Deportes
     */
    public function setNombreDeporte($nombreDeporte)
    {
        $this->nombreDeporte = $nombreDeporte;

        return $this;
    }

    /**
     * Get nombreDeporte
     *
     * @return string 
     */
    public function getNombreDeporte()
    {
        return $this->nombreDeporte;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Deportes
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
