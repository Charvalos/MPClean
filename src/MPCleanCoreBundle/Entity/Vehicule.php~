<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_vehicule", columns={"id_vhc"})}, indexes={@ORM\Index(name="fk_classe", columns={"fk_classe"})})
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_classe", type="integer", nullable=false)
     */
    private $fkClasse;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_vhc", type="text", length=65535, nullable=false)
     */
    private $libelleVhc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_vhc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVhc;



    /**
     * Set fkClasse
     *
     * @param integer $fkClasse
     *
     * @return Vehicule
     */
    public function setFkClasse($fkClasse)
    {
        $this->fkClasse = $fkClasse;

        return $this;
    }

    /**
     * Get fkClasse
     *
     * @return integer
     */
    public function getFkClasse()
    {
        return $this->fkClasse;
    }

    /**
     * Set libelleVhc
     *
     * @param string $libelleVhc
     *
     * @return Vehicule
     */
    public function setLibelleVhc($libelleVhc)
    {
        $this->libelleVhc = $libelleVhc;

        return $this;
    }

    /**
     * Get libelleVhc
     *
     * @return string
     */
    public function getLibelleVhc()
    {
        return $this->libelleVhc;
    }

    /**
     * Get idVhc
     *
     * @return integer
     */
    public function getIdVhc()
    {
        return $this->idVhc;
    }
}
