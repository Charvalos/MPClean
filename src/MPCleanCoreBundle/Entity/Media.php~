<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_media", columns={"id_med"})})
 * @ORM\Entity
 */
class Media
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_form", type="integer", nullable=false)
     */
    private $fkForm;

    /**
     * @var string
     *
     * @ORM\Column(name="url_med", type="text", length=255, nullable=false)
     */
    private $urlMed;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_med", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMed;



    /**
     * Set fkForm
     *
     * @param integer $fkForm
     *
     * @return Media
     */
    public function setFkForm($fkForm)
    {
        $this->fkForm = $fkForm;

        return $this;
    }

    /**
     * Get fkForm
     *
     * @return integer
     */
    public function getFkForm()
    {
        return $this->fkForm;
    }

    /**
     * Set urlMed
     *
     * @param string $urlMed
     *
     * @return Media
     */
    public function setUrlMed($urlMed)
    {
        $this->urlMed = $urlMed;

        return $this;
    }

    /**
     * Get urlMed
     *
     * @return string
     */
    public function getUrlMed()
    {
        return $this->urlMed;
    }

    /**
     * Get idMed
     *
     * @return integer
     */
    public function getIdMed()
    {
        return $this->idMed;
    }
}
