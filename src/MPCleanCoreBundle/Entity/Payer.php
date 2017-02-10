<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payer
 *
 * @ORM\Table(name="payer", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_cli_typepaie", columns={"fk_typepai", "fk_cli"})})
 * @ORM\Entity
 */
class Payer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_typepai", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fkTypepai;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cli", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fkCli;



    /**
     * Set fkTypepai
     *
     * @param integer $fkTypepai
     *
     * @return Payer
     */
    public function setFkTypepai($fkTypepai)
    {
        $this->fkTypepai = $fkTypepai;

        return $this;
    }

    /**
     * Get fkTypepai
     *
     * @return integer
     */
    public function getFkTypepai()
    {
        return $this->fkTypepai;
    }

    /**
     * Set fkCli
     *
     * @param integer $fkCli
     *
     * @return Payer
     */
    public function setFkCli($fkCli)
    {
        $this->fkCli = $fkCli;

        return $this;
    }

    /**
     * Get fkCli
     *
     * @return integer
     */
    public function getFkCli()
    {
        return $this->fkCli;
    }
}
