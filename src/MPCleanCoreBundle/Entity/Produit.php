<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit",
 *  indexes={
 *      @ORM\Index(
 *          name="ind_fk_media",
 *          columns={"fk_med"}
 *      ),
 *      @ORM\Index(
 *          name="ind_fk_cat",
 *          columns={"fk_cat"}
 *      ),
 *      @ORM\Index(
 *          name="ind_fk_type",
 *          columns={"fk_type"}
 *      ),
 *      @ORM\Index(
 *          name="ind_fk_marq",
 *          columns={"fk_marq"}
 *      )
 *  }
 * )
 * @ORM\Entity
 */
class Produit extends Marchandises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cat", type="integer", nullable=false)
     * @ORM\OneToOne(targetEntity="MPClean\MPCleanCoreBundle\Entity\Media", cascade={"persist"})
     */
    private $fkCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     * @ORM\OneToOne(targetEntity="MPClean\MPCleanCoreBundle\Entity\TypeProduit", cascade={"persist"})
     */
    private $fkType;

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
     * @var \MPCleanCoreBundle\Entity\Media
     * @ORM\OneToOne(targetEntity="MPClean\MPCleanCoreBundle\Entity\Media", cascade={"persist"})
     */
    private $fkMed;


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
     * Set fkMarc
     *
     * @param \MPCleanCoreBundle\Entity\Marchandise $fkMarc
     *
     * @return Produit
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