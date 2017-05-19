<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_categorie", columns={"id_cat"})})
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_cat", type="text", length=255, nullable=false)
     */
    private $libelleCat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;



    /**
     * Set libelleCat
     *
     * @param string $libelleCat
     *
     * @return Categorie
     */
    public function setLibelleCat($libelleCat)
    {
        $this->libelleCat = $libelleCat;

        return $this;
    }

    /**
     * Get libelleCat
     *
     * @return string
     */
    public function getLibelleCat()
    {
        return $this->libelleCat;
    }

    /**
     * Get idCat
     *
     * @return integer
     */
    public function getIdCat()
    {
        return $this->idCat;
    }
}
