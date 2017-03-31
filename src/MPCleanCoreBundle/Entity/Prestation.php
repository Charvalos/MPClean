<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Prestation extends Marchandises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_art", type="integer", nullable=false)
     * @ORM\OneToOne(targetEntity="MPClean\MPCleanCoreBundle\Entity\Article", cascade={"persist"})
     */
    private $fkArt;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_serv", type="text", length=65535, nullable=false)
     */
    private $libelleServ;

    /**
     * @var string
     *
     * @ORM\Column(name="description_serv", type="text", length=65535, nullable=false)
     */
    private $descriptionServ;

    /**
     * @var \MPCleanCoreBundle\Entity\Marchandises
     */
    private $fkMarc;


    /**
     * Set fkArt
     *
     * @param integer $fkArt
     *
     * @return Prestation
     */
    public function setFkArt($fkArt)
    {
        $this->fkArt = $fkArt;

        return $this;
    }

    /**
     * Get fkArt
     *
     * @return integer
     */
    public function getFkArt()
    {
        return $this->fkArt;
    }

    /**
     * Set libelleServ
     *
     * @param string $libelleServ
     *
     * @return Prestation
     */
    public function setLibelleServ($libelleServ)
    {
        $this->libelleServ = $libelleServ;

        return $this;
    }

    /**
     * Get libelleServ
     *
     * @return string
     */
    public function getLibelleServ()
    {
        return $this->libelleServ;
    }

    /**
     * Set descriptionServ
     *
     * @param string $descriptionServ
     *
     * @return Prestation
     */
    public function setDescriptionServ($descriptionServ)
    {
        $this->descriptionServ = $descriptionServ;

        return $this;
    }

    /**
     * Get descriptionServ
     *
     * @return string
     */
    public function getDescriptionServ()
    {
        return $this->descriptionServ;
    }

    /**
     * Set fkMarc
     *
     * @param \MPCleanCoreBundle\Entity\Marchandise $fkMarc
     *
     * @return Prestation
     */
    public function setFkMarc(\MPCleanCoreBundle\Entity\Marchandise $fkMarc = null)
    {
        $this->fkMarc = $fkMarc;

        return $this;
    }

    /**
     * Get fkMarc
     *
     * @return \MPCleanCoreBundle\Entity\Marchandise
     */
    public function getFkMarc()
    {
        return $this->fkMarc;
    }
}