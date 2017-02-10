<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_article", columns={"id_art"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var string
     *
     * @ORM\Column(name="art_libelle", type="text", length=255, nullable=false)
     */
    private $artLibelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_art", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArt;



    /**
     * Set artLibelle
     *
     * @param string $artLibelle
     *
     * @return Article
     */
    public function setArtLibelle($artLibelle)
    {
        $this->artLibelle = $artLibelle;

        return $this;
    }

    /**
     * Get artLibelle
     *
     * @return string
     */
    public function getArtLibelle()
    {
        return $this->artLibelle;
    }

    /**
     * Get idArt
     *
     * @return integer
     */
    public function getIdArt()
    {
        return $this->idArt;
    }
}
