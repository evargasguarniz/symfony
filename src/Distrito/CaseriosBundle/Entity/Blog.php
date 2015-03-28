<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Blog
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
     * @ORM\Column(name="NombreBlog", type="string", length=255)
     */
    private $nombreBlog;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaPublicacion", type="date")
     */
    private $fechaPublicacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HoraPublicacion", type="time")
     */
    private $horaPublicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="AutorPublicacion", type="string", length=255)
     */
    private $autorPublicacion;


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
     * Set nombreBlog
     *
     * @param string $nombreBlog
     * @return Blog
     */
    public function setNombreBlog($nombreBlog)
    {
        $this->nombreBlog = $nombreBlog;

        return $this;
    }

    /**
     * Get nombreBlog
     *
     * @return string 
     */
    public function getNombreBlog()
    {
        return $this->nombreBlog;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Blog
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
     * Set fechaPublicacion
     *
     * @param \DateTime $fechaPublicacion
     * @return Blog
     */
    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;

        return $this;
    }

    /**
     * Get fechaPublicacion
     *
     * @return \DateTime 
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * Set horaPublicacion
     *
     * @param \DateTime $horaPublicacion
     * @return Blog
     */
    public function setHoraPublicacion($horaPublicacion)
    {
        $this->horaPublicacion = $horaPublicacion;

        return $this;
    }

    /**
     * Get horaPublicacion
     *
     * @return \DateTime 
     */
    public function getHoraPublicacion()
    {
        return $this->horaPublicacion;
    }

    /**
     * Set autorPublicacion
     *
     * @param string $autorPublicacion
     * @return Blog
     */
    public function setAutorPublicacion($autorPublicacion)
    {
        $this->autorPublicacion = $autorPublicacion;

        return $this;
    }

    /**
     * Get autorPublicacion
     *
     * @return string 
     */
    public function getAutorPublicacion()
    {
        return $this->autorPublicacion;
    }
}
