<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionPrestation
 *
 * @ORM\Table(name="option_prestation", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_option", columns={"id_opt"})})
 * @ORM\Entity
 */
class OptionPrestation
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_opt", type="text", length=255, nullable=false)
     */
    private $libelleOpt;

    /**
     * @var string
     *
     * @ORM\Column(name="description_opt", type="text", length=65535, nullable=false)
     */
    private $descriptionOpt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_opt", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOpt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MPCleanCoreBundle\Entity\Prestation", mappedBy="fkOpt")
     */
    private $fkMarc;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkMarc = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set libelleOpt
     *
     * @param string $libelleOpt
     *
     * @return OptionPrestation
     */
    public function setLibelleOpt($libelleOpt)
    {
        $this->libelleOpt = $libelleOpt;

        return $this;
    }

    /**
     * Get libelleOpt
     *
     * @return string
     */
    public function getLibelleOpt()
    {
        return $this->libelleOpt;
    }

    /**
     * Set descriptionOpt
     *
     * @param string $descriptionOpt
     *
     * @return OptionPrestation
     */
    public function setDescriptionOpt($descriptionOpt)
    {
        $this->descriptionOpt = $descriptionOpt;

        return $this;
    }

    /**
     * Get descriptionOpt
     *
     * @return string
     */
    public function getDescriptionOpt()
    {
        return $this->descriptionOpt;
    }

    /**
     * Get idOpt
     *
     * @return integer
     */
    public function getIdOpt()
    {
        return $this->idOpt;
    }

    /**
     * Add fkMarc
     *
     * @param \MPCleanCoreBundle\Entity\Prestation $fkMarc
     *
     * @return OptionPrestation
     */
    public function addFkMarc(\MPCleanCoreBundle\Entity\Prestation $fkMarc)
    {
        $this->fkMarc[] = $fkMarc;

        return $this;
    }

    /**
     * Remove fkMarc
     *
     * @param \MPCleanCoreBundle\Entity\Prestation $fkMarc
     */
    public function removeFkMarc(\MPCleanCoreBundle\Entity\Prestation $fkMarc)
    {
        $this->fkMarc->removeElement($fkMarc);
    }

    /**
     * Get fkMarc
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFkMarc()
    {
        return $this->fkMarc;
    }
}
