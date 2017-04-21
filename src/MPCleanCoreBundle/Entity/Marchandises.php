<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marchandises
 *
 * @ORM\Table(name="marchandises")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name = "type", type = "string")
 * @ORM\DiscriminatorMap({"prestation" = "Prestation", "produit" = "Produit"})
 */
abstract class Marchandises
{
    /**
     * @var string
     *
     * @ORM\Column(name="prix_marc", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $prixMarc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_marc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarc;

    /**
     * Set prixMarc
     *
     * @param string $prixMarc
     *
     * @return Marchandises
     */
    public function setPrixMarc($prixMarc)
    {
        $this->prixMarc = $prixMarc;

        return $this;
    }

    /**
     * Get prixMarc
     *
     * @return string
     */
    public function getPrixMarc()
    {
        return $this->prixMarc;
    }

    /**
     * Get idMarc
     *
     * @return integer
     */
    public function getIdMarc()
    {
        return $this->idMarc;
    }
}
