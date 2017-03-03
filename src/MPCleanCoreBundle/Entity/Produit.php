<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_produit", columns={"id_prod"})}, indexes={@ORM\Index(name="produit_marchandise", columns={"fk_marc"}), @ORM\Index(name="ind_fk_media", columns={"fk_med"}), @ORM\Index(name="ind_fk_cat", columns={"fk_cat"}), @ORM\Index(name="ind_fk_type", columns={"fk_type"}), @ORM\Index(name="ind_fk_marq", columns={"fk_marq"})})
 * @ORM\Entity
 */
class Produit extends Marchandises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cat", type="integer", nullable=false)
     */
    private $fkCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_marq", type="integer", nullable=false)
     */
    private $fkMarq;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_prod", type="text", length=255, nullable=false)
     */
    private $libelleProd;

    /**
     * @var string
     *
     * @ORM\Column(name="description_prod", type="text", length=255, nullable=false)
     */
    private $descriptionProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte_prod", type="integer", nullable=false)
     */
    private $qteProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prod", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProd;

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
     * @var \MPCleanCoreBundle\Entity\Produit
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Marchandises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_marc", referencedColumnName="id_marc")
     * })
     */
    private $fkMarc;



    /**
     * Set fkCat
     *
     * @param integer $fkCat
     *
     * @return Produit
     */
    public function setFkCat($fkCat)
    {
        $this->fkCat = $fkCat;

        return $this;
    }

    /**
     * Get fkCat
     *
     * @return integer
     */
    public function getFkCat()
    {
        return $this->fkCat;
    }

    /**
     * Set fkType
     *
     * @param integer $fkType
     *
     * @return Produit
     */
    public function setFkType($fkType)
    {
        $this->fkType = $fkType;

        return $this;
    }

    /**
     * Get fkType
     *
     * @return integer
     */
    public function getFkType()
    {
        return $this->fkType;
    }

    /**
     * Set fkMarq
     *
     * @param integer $fkMarq
     *
     * @return Produit
     */
    public function setFkMarq($fkMarq)
    {
        $this->fkMarq = $fkMarq;

        return $this;
    }

    /**
     * Get fkMarq
     *
     * @return integer
     */
    public function getFkMarq()
    {
        return $this->fkMarq;
    }

    /**
     * Set libelleProd
     *
     * @param string $libelleProd
     *
     * @return Produit
     */
    public function setLibelleProd($libelleProd)
    {
        $this->libelleProd = $libelleProd;

        return $this;
    }

    /**
     * Get libelleProd
     *
     * @return string
     */
    public function getLibelleProd()
    {
        return $this->libelleProd;
    }

    /**
     * Set descriptionProd
     *
     * @param string $descriptionProd
     *
     * @return Produit
     */
    public function setDescriptionProd($descriptionProd)
    {
        $this->descriptionProd = $descriptionProd;

        return $this;
    }

    /**
     * Get descriptionProd
     *
     * @return string
     */
    public function getDescriptionProd()
    {
        return $this->descriptionProd;
    }

    /**
     * Set qteProd
     *
     * @param integer $qteProd
     *
     * @return Produit
     */
    public function setQteProd($qteProd)
    {
        $this->qteProd = $qteProd;

        return $this;
    }

    /**
     * Get qteProd
     *
     * @return integer
     */
    public function getQteProd()
    {
        return $this->qteProd;
    }

    /**
     * Get idProd
     *
     * @return integer
     */
    public function getidProd()
    {
        return $this->idProd;
    }

    /**
     * Set fkMed
     *
     * @param \MPCleanCoreBundle\Entity\Media $fkMed
     *
     * @return Produit
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
     * Set fkMarc
     *
     * @param \MPCleanCoreBundle\Entity\Marchandises $fkMarc
     *
     * @return Produit
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
}
