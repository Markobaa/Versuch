<?php

namespace Versuch\stoerungsmelderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stoerung
 *
 * @ORM\Table(name="stoerung")
 * @ORM\Entity(repositoryClass="Versuch\stoerungsmelderBundle\Repository\StoerungRepository")
 */
class Stoerung
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
     * @ORM\Column(name="maschine_id", type="integer", nullable=true)
     */
    private $maschineId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="st_start", type="datetime")
     */
    private $stStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="st_end", type="datetime")
     */
    private $stEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="bemerkungen", type="text")
     */
    private $bemerkungen;

    /**
     * @var string
     *
     * @ORM\Column(name="massnahmen", type="string", length=255, nullable=true)
     */
    private $massnahmen;

    /**
     * @var string
     *
     * @ORM\Column(name="behoben", type="string", length=255)
     */
    private $behoben;

    /**
     * @var string
     *
     * @ORM\Column(name="art", type="string", length=255)
     */
    private $art;


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
     * Set maschineId
     *
     * @param integer $maschineId
     *
     * @return Stoerung
     */
    public function setMaschineId($maschineId)
    {
        $this->maschineId = $maschineId;

        return $this;
    }

    /**
     * Get maschineId
     *
     * @return int
     */
    public function getMaschineId()
    {
        return $this->maschineId;
    }

    /**
     * Set stStart
     *
     * @param \DateTime $stStart
     *
     * @return Stoerung
     */
    public function setStStart($stStart)
    {
        $this->stStart = $stStart;

        return $this;
    }

    /**
     * Get stStart
     *
     * @return \DateTime
     */
    public function getStStart()
    {
        return $this->stStart;
    }

    /**
     * Set stEnd
     *
     * @param \DateTime $stEnd
     *
     * @return Stoerung
     */
    public function setStEnd($stEnd)
    {
        $this->stEnd = $stEnd;

        return $this;
    }

    /**
     * Get stEnd
     *
     * @return \DateTime
     */
    public function getStEnd()
    {
        return $this->stEnd;
    }

    /**
     * Set bemerkungen
     *
     * @param string $bemerkungen
     *
     * @return Stoerung
     */
    public function setBemerkungen($bemerkungen)
    {
        $this->bemerkungen = $bemerkungen;

        return $this;
    }

    /**
     * Get bemerkungen
     *
     * @return string
     */
    public function getBemerkungen()
    {
        return $this->bemerkungen;
    }

    /**
     * Set massnahmen
     *
     * @param string $massnahmen
     *
     * @return Stoerung
     */
    public function setMassnahmen($massnahmen)
    {
        $this->massnahmen = $massnahmen;

        return $this;
    }

    /**
     * Get massnahmen
     *
     * @return string
     */
    public function getMassnahmen()
    {
        return $this->massnahmen;
    }

    /**
     * Set behoben
     *
     * @param string $behoben
     *
     * @return Stoerung
     */
    public function setBehoben($behoben)
    {
        $this->behoben = $behoben;

        return $this;
    }

    /**
     * Get behoben
     *
     * @return string
     */
    public function getBehoben()
    {
        return $this->behoben;
    }

    /**
     * Set art
     *
     * @param string $art
     *
     * @return Stoerung
     */
    public function setArt($art)
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get art
     *
     * @return string
     */
    public function getArt()
    {
        return $this->art;
    }
}

