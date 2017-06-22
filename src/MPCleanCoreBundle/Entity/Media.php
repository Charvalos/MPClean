<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="MPCleanCoreBundle\Repository\MediaRepository")
 */
class Media
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
     * @ORM\Column(name="urlMedia", type="string", length=255)
     */
    private $urlMedia;

    /**
     * @var string
     *
     * @ORM\Column(name="typeMedia", type="string", length=255)
     */
    private $typeMedia;


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
     * Set urlMedia
     *
     * @param string $urlMedia
     *
     * @return Media
     */
    public function setUrlMedia($urlMedia)
    {
        $this->urlMedia = $urlMedia;

        return $this;
    }

    /**
     * Get urlMedia
     *
     * @return string
     */
    public function getUrlMedia()
    {
        return $this->urlMedia;
    }

    /**
     * Set typeMedia
     *
     * @param string $typeMedia
     *
     * @return Media
     */
    public function setTypeMedia($typeMedia)
    {
        $this->typeMedia = $typeMedia;

        return $this;
    }

    /**
     * Get typeMedia
     *
     * @return string
     */
    public function getTypeMedia()
    {
        return $this->typeMedia;
    }
}

