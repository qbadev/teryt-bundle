<?php

namespace Qbadev\TerytBundle\Entity;

/**
 * Powiat.
 */
class Powiat
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $gminy;

    /**
     * @var \Qbadev\TerytBundle\Entity\Wojewodztwo
     */
    private $wojewodztwo;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->miejscowosci = new \Doctrine\Common\Collections\ArrayCollection();
        $this->gminy = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function loadDataFromArray(array $object)
    {
        $this->pow = $object['POW'];
        $this->woj = $object['WOJ'];
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
     * @return Powiat
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
     * @return Powiat
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
     * Set nazwa.
     *
     * @param string $nazwa
     *
     * @return Powiat
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
     * @return Powiat
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
     * @return Powiat
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
     * @return Powiat
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
     * Add gminy.
     *
     * @param \Qbadev\TerytBundle\Entity\Gmina $gminy
     *
     * @return Powiat
     */
    public function addGminy(\Qbadev\TerytBundle\Entity\Gmina $gminy)
    {
        $this->gminy[] = $gminy;

        return $this;
    }

    /**
     * Remove gminy.
     *
     * @param \Qbadev\TerytBundle\Entity\Gmina $gminy
     */
    public function removeGminy(\Qbadev\TerytBundle\Entity\Gmina $gminy)
    {
        $this->gminy->removeElement($gminy);
    }

    /**
     * Get gminy.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGminy()
    {
        return $this->gminy;
    }

    /**
     * Set wojewodztwo.
     *
     * @param \Qbadev\TerytBundle\Entity\Wojewodztwo $wojewodztwo
     *
     * @return Powiat
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
}
