<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestation
 *
 * @ORM\Table(name="prestation")
 * @ORM\Entity(repositoryClass="MPCleanCoreBundle\Repository\PrestationRepository")
 */
class Prestation extends Marchandise
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
     * @ORM\Column(name="libellePrest", type="text")
     */
    private $libellePrest;

    /**
     * @var string
     *
     * @ORM\Column(name="descPrest", type="text", nullable=true)
     */
    private $descPrest;


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
     * Set libellePrest
     *
     * @param string $libellePrest
     *
     * @return Prestation
     */
    public function setLibellePrest($libellePrest)
    {
        $this->libellePrest = $libellePrest;

        return $this;
    }

    /**
     * Get libellePrest
     *
     * @return string
     */
    public function getLibellePrest()
    {
        return $this->libellePrest;
    }

    /**
     * Set descPrest
     *
     * @param string $descPrest
     *
     * @return Prestation
     */
    public function setDescPrest($descPrest)
    {
        $this->descPrest = $descPrest;

        return $this;
    }

    /**
     * Get descPrest
     *
     * @return string
     */
    public function getDescPrest()
    {
        return $this->descPrest;
    }
}

