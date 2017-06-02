<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="MPCleanCoreBundle\Repository\ProduitRepository")
 */
class Produit extends Marchandise
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleProd", type="string", length=50)
     */
    private $libelleProd;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionProd", type="text")
     */
    private $descriptionProd;

    /**
     * @var string
     *
     * @ORM\Column(name="qteProd", type="decimal", precision=5, scale=0)
     */
    private $qteProd;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * @param string $qteProd
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
     * @return string
     */
    public function getQteProd()
    {
        return $this->qteProd;
    }
}

