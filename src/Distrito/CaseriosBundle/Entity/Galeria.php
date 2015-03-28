<?php

namespace Distrito\CaseriosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galeria
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Galeria
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
     * @ORM\Column(name="imgGaleria", type="string", length=255)
     */
    private $imgGaleria;

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
     * Set imgGaleria
     *
     * @param string $imgGaleria
     * @return Galeria
     */
    public function setImgGaleria($imgGaleria)
    {
        $this->imgGaleria = $imgGaleria;

        return $this;
    }

    /**
     * Get imgGaleria
     *
     * @return string 
     */
    public function getImgGaleria()
    {
        return $this->imgGaleria;
    }
}
