<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table(name="marque", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_marque", columns={"id_marq"})})
 * @ORM\Entity
 */
class Marque
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_marq", type="text", length=65535, nullable=false)
     */
    private $libelleMarq;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_marq", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarq;



    /**
     * Set libelleMarq
     *
     * @param string $libelleMarq
     *
     * @return Marque
     */
    public function setLibelleMarq($libelleMarq)
    {
        $this->libelleMarq = $libelleMarq;

        return $this;
    }

    /**
     * Get libelleMarq
     *
     * @return string
     */
    public function getLibelleMarq()
    {
        return $this->libelleMarq;
    }

    /**
     * Get idMarq
     *
     * @return integer
     */
    public function getIdMarq()
    {
        return $this->idMarq;
    }
}
