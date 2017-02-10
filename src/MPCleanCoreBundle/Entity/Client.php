<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_cli", columns={"id_cli"})}, indexes={@ORM\Index(name="ind_fk_localite", columns={"fk_loc"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_cli", type="text", length=255, nullable=false)
     */
    private $nomCli;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_cli", type="text", length=255, nullable=false)
     */
    private $prenomCli;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_portable_cli", type="text", length=255, nullable=false)
     */
    private $telPortableCli;

    /**
     * @var string
     *
     * @ORM\Column(name="email_cli", type="text", length=255, nullable=false)
     */
    private $emailCli;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cli", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCli;

    /**
     * @var \MPCleanCoreBundle\Entity\Localite
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Localite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_loc", referencedColumnName="id_loc")
     * })
     */
    private $fkLoc;



    /**
     * Set nomCli
     *
     * @param string $nomCli
     *
     * @return Client
     */
    public function setNomCli($nomCli)
    {
        $this->nomCli = $nomCli;

        return $this;
    }

    /**
     * Get nomCli
     *
     * @return string
     */
    public function getNomCli()
    {
        return $this->nomCli;
    }

    /**
     * Set prenomCli
     *
     * @param string $prenomCli
     *
     * @return Client
     */
    public function setPrenomCli($prenomCli)
    {
        $this->prenomCli = $prenomCli;

        return $this;
    }

    /**
     * Get prenomCli
     *
     * @return string
     */
    public function getPrenomCli()
    {
        return $this->prenomCli;
    }

    /**
     * Set telPortableCli
     *
     * @param string $telPortableCli
     *
     * @return Client
     */
    public function setTelPortableCli($telPortableCli)
    {
        $this->telPortableCli = $telPortableCli;

        return $this;
    }

    /**
     * Get telPortableCli
     *
     * @return string
     */
    public function getTelPortableCli()
    {
        return $this->telPortableCli;
    }

    /**
     * Set emailCli
     *
     * @param string $emailCli
     *
     * @return Client
     */
    public function setEmailCli($emailCli)
    {
        $this->emailCli = $emailCli;

        return $this;
    }

    /**
     * Get emailCli
     *
     * @return string
     */
    public function getEmailCli()
    {
        return $this->emailCli;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Get idCli
     *
     * @return integer
     */
    public function getIdCli()
    {
        return $this->idCli;
    }

    /**
     * Set fkLoc
     *
     * @param \MPCleanCoreBundle\Entity\Localite $fkLoc
     *
     * @return Client
     */
    public function setFkLoc(\MPCleanCoreBundle\Entity\Localite $fkLoc = null)
    {
        $this->fkLoc = $fkLoc;

        return $this;
    }

    /**
     * Get fkLoc
     *
     * @return \MPCleanCoreBundle\Entity\Localite
     */
    public function getFkLoc()
    {
        return $this->fkLoc;
    }
}
