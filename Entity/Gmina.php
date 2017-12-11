<?php

namespace Qbadev\TerytBundle\Entity;

/**
 * Gmina.
 */
class Gmina
{
    /**
     * @var string
     */
    private $woj;

    /**
     * @var string
     */
    private $pow;

    /**
     * @var string
     */
    private $gmi;

    /**
     * @var string
     */
    private $rodz;

    /**
     * @var string
     */
    private $nazwa;

    /**
     * @var string
     */
    private $nazdod;

    /**
     * @var \DateTime
     */
    private $stan_na;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $miejscowosci;

    /**
     * @var \Qbadev\TerytBundle\Entity\Wojewodztwo
     */
    private $wojewodztwo;

    /**
     * @var \Qbadev\TerytBundle\Entity\Powiat
     */
    private $powiat;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->miejscowosci = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function loadDataFromArray(array $object)
    {
        $this->pow = $object['POW'];
        $this->woj = $object['WOJ'];
        $this->gmi = $object['GMI'];
        $this->rodz = $object['RODZ'];
        $this->nazwa = $object['NAZWA'];
        $this->nazdod = $object['NAZWA_DOD'];
        $this->stan_na = new \DateTime(
                date('Y-m-d', strtotime($object['STAN_NA'])));
    }

    /**
     * Set woj.
     *
     * @param string $woj
     *
     * @return Gmina
     */
    public function setWoj($woj)
    {
        $this->woj = $woj;

        return $this;
    }

    /**
     * Get woj.
     *
     * @return string
     */
    public function getWoj()
    {
        return $this->woj;
    }

    /**
     * Set pow.
     *
     * @param string $pow
     *
     * @return Gmina
     */
    public function setPow($pow)
    {
        $this->pow = $pow;

        return $this;
    }

    /**
     * Get pow.
     *
     * @return string
     */
    public function getPow()
    {
        return $this->pow;
    }

    /**
     * Set gmi.
     *
     * @param string $gmi
     *
     * @return Gmina
     */
    public function setGmi($gmi)
    {
        $this->gmi = $gmi;

        return $this;
    }

    /**
     * Get gmi.
     *
     * @return string
     */
    public function getGmi()
    {
        return $this->gmi;
    }

    /**
     * Set rodz.
     *
     * @param string $rodz
     *
     * @return Gmina
     */
    public function setRodz($rodz)
    {
        $this->rodz = $rodz;

        return $this;
    }

    /**
     * Get rodz.
     *
     * @return string
     */
    public function getRodz()
    {
        return $this->rodz;
    }

    /**
     * Set nazwa.
     *
     * @param string $nazwa
     *
     * @return Gmina
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa.
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set nazdod.
     *
     * @param string $nazdod
     *
     * @return Gmina
     */
    public function setNazdod($nazdod)
    {
        $this->nazdod = $nazdod;

        return $this;
    }

    /**
     * Get nazdod.
     *
     * @return string
     */
    public function getNazdod()
    {
        return $this->nazdod;
    }

    /**
     * Set stan_na.
     *
     * @param \DateTime $stanNa
     *
     * @return Gmina
     */
    public function setStanNa($stanNa)
    {
        $this->stan_na = $stanNa;

        return $this;
    }

    /**
     * Get stan_na.
     *
     * @return \DateTime
     */
    public function getStanNa()
    {
        return $this->stan_na;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add miejscowosci.
     *
     * @param \Qbadev\TerytBundle\Entity\Miejscowosc $miejscowosci
     *
     * @return Gmina
     */
    public function addMiejscowosci(\Qbadev\TerytBundle\Entity\Miejscowosc $miejscowosci)
    {
        $this->miejscowosci[] = $miejscowosci;

        return $this;
    }

    /**
     * Remove miejscowosci.
     *
     * @param \Qbadev\TerytBundle\Entity\Miejscowosc $miejscowosci
     */
    public function removeMiejscowosci(\Qbadev\TerytBundle\Entity\Miejscowosc $miejscowosci)
    {
        $this->miejscowosci->removeElement($miejscowosci);
    }

    /**
     * Get miejscowosci.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMiejscowosci()
    {
        return $this->miejscowosci;
    }

    /**
     * Set wojewodztwo.
     *
     * @param \Qbadev\TerytBundle\Entity\Wojewodztwo $wojewodztwo
     *
     * @return Gmina
     */
    public function setWojewodztwo(\Qbadev\TerytBundle\Entity\Wojewodztwo $wojewodztwo = null)
    {
        $this->wojewodztwo = $wojewodztwo;

        return $this;
    }

    /**
     * Get wojewodztwo.
     *
     * @return \Qbadev\TerytBundle\Entity\Wojewodztwo
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Set powiat.
     *
     * @param \Qbadev\TerytBundle\Entity\Powiat $powiat
     *
     * @return Gmina
     */
    public function setPowiat(\Qbadev\TerytBundle\Entity\Powiat $powiat = null)
    {
        $this->powiat = $powiat;

        return $this;
    }

    /**
     * Get powiat.
     *
     * @return \Qbadev\TerytBundle\Entity\Powiat
     */
    public function getPowiat()
    {
        return $this->powiat;
    }
}
