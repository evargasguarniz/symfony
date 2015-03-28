<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comentarios
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
     * @ORM\Column(name="idBlog", type="integer")
     */
    private $idBlog;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario", type="text")
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaComentario", type="date")
     */
    private $fechaComentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaComentario", type="time")
     */
    private $horaComentario;

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
     * Set idBlog
     *
     * @param integer $idBlog
     * @return Comentarios
     */
    public function setIdBlog($idBlog)
    {
        $this->idBlog = $idBlog;

        return $this;
    }

    /**
     * Get idBlog
     *
     * @return integer 
     */
    public function getIdBlog()
    {
        return $this->idBlog;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Comentarios
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fechaComentario
     *
     * @param \DateTime $fechaComentario
     * @return Comentarios
     */
    public function setFechaComentario($fechaComentario)
    {
        $this->fechaComentario = $fechaComentario;

        return $this;
    }

    /**
     * Get fechaComentario
     *
     * @return \DateTime 
     */
    public function getFechaComentario()
    {
        return $this->fechaComentario;
    }

    /**
     * Set horaComentario
     *
     * @param \DateTime $horaComentario
     * @return Comentarios
     */
    public function setHoraComentario($horaComentario)
    {
        $this->horaComentario = $horaComentario;

        return $this;
    }

    /**
     * Get horaComentario
     *
     * @return \DateTime 
     */
    public function getHoraComentario()
    {
        return $this->horaComentario;
    }
}
