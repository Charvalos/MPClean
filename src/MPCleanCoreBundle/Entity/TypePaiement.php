<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePaiement
 *
 * @ORM\Table(name="type_paiement", uniqueConstraints={@ORM\UniqueConstraint(name="pk_ind_typepaie", columns={"id_typepai"})})
 * @ORM\Entity
 */
class TypePaiement
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_paie", type="text", length=255, nullable=false)
     */
    private $libellePaie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_typepai", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypepai;



    /**
     * Set libellePaie
     *
     * @param string $libellePaie
     *
     * @return TypePaiement
     */
    public function setLibellePaie($libellePaie)
    {
        $this->libellePaie = $libellePaie;

        return $this;
    }

    /**
     * Get libellePaie
     *
     * @return string
     */
    public function getLibellePaie()
    {
        return $this->libellePaie;
    }

    /**
     * Get idTypepai
     *
     * @return integer
     */
    public function getIdTypepai()
    {
        return $this->idTypepai;
    }
}
