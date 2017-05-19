<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lier
 *
 * @ORM\Table(name="lier", uniqueConstraints={@ORM\UniqueConstraint(name="media_prestation", columns={"fk_prestation", "fk_med"}), @ORM\UniqueConstraint(name="ind_fk_media_prestation", columns={"fk_med"})}, indexes={@ORM\Index(name="IDX_B133E8FAA1A6453E", columns={"fk_prestation"})})
 * @ORM\Entity
 */
class Lier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_lier", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLier;

    /**
     * @var \MPCleanCoreBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Media")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_med", referencedColumnName="id_med")
     * })
     */
    private $fkMed;

    /**
     * @var \MPCleanCoreBundle\Entity\Prestation
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Prestation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_prestation", referencedColumnName="id_prestation")
     * })
     */
    private $fkPrestation;



    /**
     * Get idLier
     *
     * @return integer
     */
    public function getIdLier()
    {
        return $this->idLier;
    }

    /**
     * Set fkMed
     *
     * @param \MPCleanCoreBundle\Entity\Media $fkMed
     *
     * @return Lier
     */
    public function setFkMed(\MPCleanCoreBundle\Entity\Media $fkMed = null)
    {
        $this->fkMed = $fkMed;

        return $this;
    }

    /**
     * Get fkMed
     *
     * @return \MPCleanCoreBundle\Entity\Media
     */
    public function getFkMed()
    {
        return $this->fkMed;
    }

    /**
     * Set fkPrestation
     *
     * @param \MPCleanCoreBundle\Entity\Prestation $fkPrestation
     *
     * @return Lier
     */
    public function setFkPrestation(\MPCleanCoreBundle\Entity\Prestation $fkPrestation = null)
    {
        $this->fkPrestation = $fkPrestation;

        return $this;
    }

    /**
     * Get fkPrestation
     *
     * @return \MPCleanCoreBundle\Entity\Prestation
     */
    public function getFkPrestation()
    {
        return $this->fkPrestation;
    }
}
