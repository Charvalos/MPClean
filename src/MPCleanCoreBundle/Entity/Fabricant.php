<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fabricant
 *
 * @ORM\Table(name="fabricant", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_fabricant", columns={"id_fab"})}, indexes={@ORM\Index(name="est_produit", columns={"fk_art"})})
 * @ORM\Entity
 */
class Fabricant
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_fab", type="text", length=255, nullable=true)
     */
    private $nomFab;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fab", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFab;

    /**
     * @var \MPCleanCoreBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_art", referencedColumnName="id_art")
     * })
     */
    private $fkArt;



    /**
     * Set nomFab
     *
     * @param string $nomFab
     *
     * @return Fabricant
     */
    public function setNomFab($nomFab)
    {
        $this->nomFab = $nomFab;

        return $this;
    }

    /**
     * Get nomFab
     *
     * @return string
     */
    public function getNomFab()
    {
        return $this->nomFab;
    }

    /**
     * Get idFab
     *
     * @return integer
     */
    public function getIdFab()
    {
        return $this->idFab;
    }

    /**
     * Set fkArt
     *
     * @param \MPCleanCoreBundle\Entity\Article $fkArt
     *
     * @return Fabricant
     */
    public function setFkArt(\MPCleanCoreBundle\Entity\Article $fkArt = null)
    {
        $this->fkArt = $fkArt;

        return $this;
    }

    /**
     * Get fkArt
     *
     * @return \MPCleanCoreBundle\Entity\Article
     */
    public function getFkArt()
    {
        return $this->fkArt;
    }
}
