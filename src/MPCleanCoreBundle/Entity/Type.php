<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type", indexes={@ORM\Index(name="indDefinitionType", columns={"definitionType"})})
 * @ORM\Entity(repositoryClass="MPCleanCoreBundle\Repository\TypeRepository")
 */
class Type
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
     * @ORM\Column(name="libelleType", type="string", length=255)
     */
    private $libelleType;

    /**
     * @var string
     *
     * @ORM\Column(name="definitionType", type="string", length=20)
     */
    private $definitionType;

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
     * Set libelleType
     *
     * @param string $libelleType
     *
     * @return Type
     */
    public function setLibelleType($libelleType)
    {
        $this->libelleType = $libelleType;

        return $this;
    }

    /**
     * Get libelleType
     *
     * @return string
     */
    public function getLibelleType()
    {
        return $this->libelleType;
    }

    /**
     * Set definitionType
     *
     * @param string $definitionType
     *
     * @return Type
     */
    public function setDefinitionType($definitionType)
    {
        $this->definitionType = $definitionType;

        return $this;
    }

    /**
     * Get definitionType
     *
     * @return string
     */
    public function getDefinitionType()
    {
        return $this->definitionType;
    }
}
