<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Format
 *
 * @ORM\Table(name="format", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_format", columns={"id_form"})})
 * @ORM\Entity
 */
class Format
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_for", type="text", length=255, nullable=false)
     */
    private $libelleFor;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_for", type="text", length=255, nullable=false)
     */
    private $extensionFor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_form", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForm;



    /**
     * Set libelleFor
     *
     * @param string $libelleFor
     *
     * @return Format
     */
    public function setLibelleFor($libelleFor)
    {
        $this->libelleFor = $libelleFor;

        return $this;
    }

    /**
     * Get libelleFor
     *
     * @return string
     */
    public function getLibelleFor()
    {
        return $this->libelleFor;
    }

    /**
     * Set extensionFor
     *
     * @param string $extensionFor
     *
     * @return Format
     */
    public function setExtensionFor($extensionFor)
    {
        $this->extensionFor = $extensionFor;

        return $this;
    }

    /**
     * Get extensionFor
     *
     * @return string
     */
    public function getExtensionFor()
    {
        return $this->extensionFor;
    }

    /**
     * Get idForm
     *
     * @return integer
     */
    public function getIdForm()
    {
        return $this->idForm;
    }
}
