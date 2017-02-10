<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table(name="localite", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_loc", columns={"id_loc"})})
 * @ORM\Entity
 */
class Localite
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_loc", type="text", length=255, nullable=false)
     */
    private $nomLoc;

    /**
     * @var string
     *
     * @ORM\Column(name="npa_loc", type="text", length=255, nullable=false)
     */
    private $npaLoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_loc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLoc;



    /**
     * Set nomLoc
     *
     * @param string $nomLoc
     *
     * @return Localite
     */
    public function setNomLoc($nomLoc)
    {
        $this->nomLoc = $nomLoc;

        return $this;
    }

    /**
     * Get nomLoc
     *
     * @return string
     */
    public function getNomLoc()
    {
        return $this->nomLoc;
    }

    /**
     * Set npaLoc
     *
     * @param string $npaLoc
     *
     * @return Localite
     */
    public function setNpaLoc($npaLoc)
    {
        $this->npaLoc = $npaLoc;

        return $this;
    }

    /**
     * Get npaLoc
     *
     * @return string
     */
    public function getNpaLoc()
    {
        return $this->npaLoc;
    }

    /**
     * Get idLoc
     *
     * @return integer
     */
    public function getIdLoc()
    {
        return $this->idLoc;
    }
}
