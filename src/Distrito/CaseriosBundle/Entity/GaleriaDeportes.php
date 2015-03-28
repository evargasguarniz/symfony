<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GaleriaDeportes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GaleriaDeportes
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
     * @ORM\Column(name="idDeporte", type="integer")
     */
    private $idDeporte;

    /**
     * @var string
     *
     * @ORM\Column(name="imgDeporte", type="string", length=255)
     */
    private $imgDeporte;

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
     * Set idDeporte
     *
     * @param integer $idDeporte
     * @return GaleriaDeportes
     */
    public function setIdDeporte($idDeporte)
    {
        $this->idDeporte = $idDeporte;

        return $this;
    }

    /**
     * Get idDeporte
     *
     * @return integer 
     */
    public function getIdDeporte()
    {
        return $this->idDeporte;
    }

    /**
     * Set imgDeporte
     *
     * @param string $imgDeporte
     * @return GaleriaDeportes
     */
    public function setImgDeporte($imgDeporte)
    {
        $this->imgDeporte = $imgDeporte;

        return $this;
    }

    /**
     * Get imgDeporte
     *
     * @return string 
     */
    public function getImgDeporte()
    {
        return $this->imgDeporte;
    }
}
