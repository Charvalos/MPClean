<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", uniqueConstraints={@ORM\UniqueConstraint(name="ind_pk_commande", columns={"id_comm"})}, indexes={@ORM\Index(name="ind_comm_etat", columns={"en_cours_comm"}), @ORM\Index(name="marchandises_faire_partie_de_commande", columns={"fk_marc"}), @ORM\Index(name="commande_passe_par_client", columns={"fk_cli"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_comm", type="date", nullable=false)
     */
    private $dateComm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="en_cours_comm", type="boolean", nullable=true)
     */
    private $enCoursComm;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte_comm", type="integer", nullable=false)
     */
    private $qteComm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_comm", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComm;

    /**
     * @var \MPCleanCoreBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_cli", referencedColumnName="id_cli")
     * })
     */
    private $fkCli;

    /**
     * @var \MPCleanCoreBundle\Entity\Marchandises
     *
     * @ORM\ManyToOne(targetEntity="MPCleanCoreBundle\Entity\Marchandises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_marc", referencedColumnName="id_marc")
     * })
     */
    private $fkMarc;



    /**
     * Set dateComm
     *
     * @param \DateTime $dateComm
     *
     * @return Commande
     */
    public function setDateComm($dateComm)
    {
        $this->dateComm = $dateComm;

        return $this;
    }

    /**
     * Get dateComm
     *
     * @return \DateTime
     */
    public function getDateComm()
    {
        return $this->dateComm;
    }

    /**
     * Set enCoursComm
     *
     * @param boolean $enCoursComm
     *
     * @return Commande
     */
    public function setEnCoursComm($enCoursComm)
    {
        $this->enCoursComm = $enCoursComm;

        return $this;
    }

    /**
     * Get enCoursComm
     *
     * @return boolean
     */
    public function getEnCoursComm()
    {
        return $this->enCoursComm;
    }

    /**
     * Set qteComm
     *
     * @param integer $qteComm
     *
     * @return Commande
     */
    public function setQteComm($qteComm)
    {
        $this->qteComm = $qteComm;

        return $this;
    }

    /**
     * Get qteComm
     *
     * @return integer
     */
    public function getQteComm()
    {
        return $this->qteComm;
    }

    /**
     * Get idComm
     *
     * @return integer
     */
    public function getIdComm()
    {
        return $this->idComm;
    }

    /**
     * Set fkCli
     *
     * @param \MPCleanCoreBundle\Entity\Client $fkCli
     *
     * @return Commande
     */
    public function setFkCli(\MPCleanCoreBundle\Entity\Client $fkCli = null)
    {
        $this->fkCli = $fkCli;

        return $this;
    }

    /**
     * Get fkCli
     *
     * @return \MPCleanCoreBundle\Entity\Client
     */
    public function getFkCli()
    {
        return $this->fkCli;
    }

    /**
     * Set fkMarc
     *
     * @param \MPCleanCoreBundle\Entity\Marchandises $fkMarc
     *
     * @return Commande
     */
    public function setFkMarc(\MPCleanCoreBundle\Entity\Marchandises $fkMarc = null)
    {
        $this->fkMarc = $fkMarc;

        return $this;
    }

    /**
     * Get fkMarc
     *
     * @return \MPCleanCoreBundle\Entity\Marchandises
     */
    public function getFkMarc()
    {
        return $this->fkMarc;
    }
}
