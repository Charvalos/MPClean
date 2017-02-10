<?php

namespace MPCleanCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posseder
 *
 * @ORM\Table(name="posseder", uniqueConstraints={@ORM\UniqueConstraint(name="ind_id_posseder", columns={"fk_vhc", "fk_cli"})})
 * @ORM\Entity
 */
class Posseder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fk_vhc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fkVhc;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_cli", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fkCli;



    /**
     * Set fkVhc
     *
     * @param integer $fkVhc
     *
     * @return Posseder
     */
    public function setFkVhc($fkVhc)
    {
        $this->fkVhc = $fkVhc;

        return $this;
    }

    /**
     * Get fkVhc
     *
     * @return integer
     */
    public function getFkVhc()
    {
        return $this->fkVhc;
    }

    /**
     * Set fkCli
     *
     * @param integer $fkCli
     *
     * @return Posseder
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
