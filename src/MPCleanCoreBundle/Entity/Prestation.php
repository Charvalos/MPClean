<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestation
 *
 * @ORM\Table(name="prestation", indexes={@ORM\Index(name="marchandise_prestation", columns={"fk_marc"}), @ORM\Index(name="marchandise_article", columns={"fk_art"})})
 * @ORM\Entity
 */
class Prestation extends Marchandises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_art", type="integer", nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="id_prestation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPrestation;

    /**
     * @var \MPCleanCoreBundle\Entity\Marchandises
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Marchandises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_marc", referencedColumnName="id_marc")
     * })
     */
    private $fkMarc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MPCleanCoreBundle\Entity\OptionPrestation", inversedBy="fkMarc")
     * @ORM\JoinTable(name="contenir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_marc", referencedColumnName="id_prestation")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_opt", referencedColumnName="id_opt")
     *   }
     * )
     */
    private $fkOpt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkOpt = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Get idPrestation
     *
     * @return integer
     */
    public function getIdPrestation()
    {
        return $this->idPrestation;
    }

    /**
     * Set fkMarc
     *
     * @param \MPCleanCoreBundle\Entity\Marchandises $fkMarc
     *
     * @return Prestation
     */
    public function setFkMarc(\MPCleanCoreBundle\Entity\Marchandises $fkMarc = null)
    {
        $this->fkMarc = $fkMarc;

        return $this;
    }

    /**
     * Get fkMarc
     *
     * @return \MPCleanCoreBundle\Entity\Marchandises
     */
    public function getFkMarc()
    {
        return $this->fkMarc;
    }

    /**
     * Add fkOpt
     *
     * @param \MPCleanCoreBundle\Entity\OptionPrestation $fkOpt
     *
     * @return Prestation
     */
    public function addFkOpt(\MPCleanCoreBundle\Entity\OptionPrestation $fkOpt)
    {
        $this->fkOpt[] = $fkOpt;

        return $this;
    }

    /**
     * Remove fkOpt
     *
     * @param \MPCleanCoreBundle\Entity\OptionPrestation $fkOpt
     */
    public function removeFkOpt(\MPCleanCoreBundle\Entity\OptionPrestation $fkOpt)
    {
        $this->fkOpt->removeElement($fkOpt);
    }

    /**
     * Get fkOpt
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFkOpt()
    {
        return $this->fkOpt;
    }
}
