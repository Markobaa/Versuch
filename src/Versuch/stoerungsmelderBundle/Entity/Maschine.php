<?php

namespace Versuch\stoerungsmelderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maschine
 *
 * @ORM\Table(name="maschine")
 * @ORM\Entity(repositoryClass="Versuch\stoerungsmelderBundle\Repository\MaschineRepository")
 */
class Maschine
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
     * @var int
     *
     * @ORM\Column(name="abteilung_id", type="integer")
     */
    private $abteilungId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="seriennummer", type="string", length=255)
     */
    private $seriennummer;


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
     * Set abteilungId
     *
     * @param integer $abteilungId
     *
     * @return Maschine
     */
    public function setAbteilungId($abteilungId)
    {
        $this->abteilungId = $abteilungId;

        return $this;
    }

    /**
     * Get abteilungId
     *
     * @return int
     */
    public function getAbteilungId()
    {
        return $this->abteilungId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Maschine
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set seriennummer
     *
     * @param string $seriennummer
     *
     * @return Maschine
     */
    public function setSeriennummer($seriennummer)
    {
        $this->seriennummer = $seriennummer;

        return $this;
    }

    /**
     * Get seriennummer
     *
     * @return string
     */
    public function getSeriennummer()
    {
        return $this->seriennummer;
    }
}

