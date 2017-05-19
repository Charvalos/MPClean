<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeProduit
 *
 * @ORM\Table(name="type_produit", uniqueConstraints={@ORM\UniqueConstraint(name="pk_type", columns={"id_type_produit"})})
 * @ORM\Entity
 */
class TypeProduit
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_typ", type="text", length=255, nullable=false)
     */
    private $libelleTyp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_produit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeProduit;



    /**
     * Set libelleTyp
     *
     * @param string $libelleTyp
     *
     * @return TypeProduit
     */
    public function setLibelleTyp($libelleTyp)
    {
        $this->libelleTyp = $libelleTyp;

        return $this;
    }

    /**
     * Get libelleTyp
     *
     * @return string
     */
    public function getLibelleTyp()
    {
        return $this->libelleTyp;
    }

    /**
     * Get idTypeProduit
     *
     * @return integer
     */
    public function getIdTypeProduit()
    {
        return $this->idTypeProduit;
    }
}
