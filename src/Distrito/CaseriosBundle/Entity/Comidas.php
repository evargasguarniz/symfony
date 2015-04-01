<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comidas
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comidas
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
     * @ORM\Column(name="NombreComida", type="string", length=255)
     */
    private $nombreComida;

    /**
     * @var string
     *
     * @ORM\Column(name="Ingredientes", type="text")
     */
    private $ingredientes;

    /**
     * @var string
     *
     * @ORM\Column(name="Preparacion", type="text")
     */
    private $preparacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cocinero", type="string", length=255)
     */
    private $cocinero;

    /**
     * @var string
     *
     * @ORM\Column(name="VitaminasComida", type="string", length=255)
     */
    private $vitaminasComida;

    /**
     * @var integer
     *
     * @ORM\Column(name="Caserio", type="integer")
     */
    private $Caserio;

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
     * Set nombreComida
     *
     * @param string $nombreComida
     * @return Comidas
     */
    public function setNombreComida($nombreComida)
    {
        $this->nombreComida = $nombreComida;

        return $this;
    }

    /**
     * Get nombreComida
     *
     * @return string 
     */
    public function getNombreComida()
    {
        return $this->nombreComida;
    }

    /**
     * Set ingredientes
     *
     * @param string $ingredientes
     * @return Comidas
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    /**
     * Get ingredientes
     *
     * @return string 
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set preparacion
     *
     * @param string $preparacion
     * @return Comidas
     */
    public function setPreparacion($preparacion)
    {
        $this->preparacion = $preparacion;

        return $this;
    }

    /**
     * Get preparacion
     *
     * @return string 
     */
    public function getPreparacion()
    {
        return $this->preparacion;
    }

    /**
     * Set cocinero
     *
     * @param string $cocinero
     * @return Comidas
     */
    public function setCocinero($cocinero)
    {
        $this->cocinero = $cocinero;

        return $this;
    }

    /**
     * Get cocinero
     *
     * @return string 
     */
    public function getCocinero()
    {
        return $this->cocinero;
    }

    /**
     * Set vitaminasComida
     *
     * @param string $vitaminasComida
     * @return Comidas
     */
    public function setVitaminasComida($vitaminasComida)
    {
        $this->vitaminasComida = $vitaminasComida;

        return $this;
    }

    /**
     * Get vitaminasComida
     *
     * @return string 
     */
    public function getVitaminasComida()
    {
        return $this->vitaminasComida;
    }

    /**
     * Set idCaserio
     *
     * @param integer $idCaserio
     * @return Comidas
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
}
