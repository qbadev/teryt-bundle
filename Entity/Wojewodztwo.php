<?php

namespace Qbadev\TerytBundle\Entity;

/**
 * Wojewodztwo.
 */
class Wojewodztwo
{
    /**
     * @var string
     */
    private $woj;

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
    private $powiaty;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $gminy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $miejscowosci;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->powiaty = new \Doctrine\Common\Collections\ArrayCollection();
        $this->gminy = new \Doctrine\Common\Collections\ArrayCollection();
        $this->miejscowosci = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function loadDataFromArray(array $object)
    {
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
     * @return Wojewodztwo
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
     * Set nazwa.
     *
     * @param string $nazwa
     *
     * @return Wojewodztwo
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
     * @return Wojewodztwo
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
     * @return Wojewodztwo
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
     * Add powiaty.
     *
     * @param \Qbadev\TerytBundle\Entity\Powiat $powiaty
     *
     * @return Wojewodztwo
     */
    public function addPowiaty(\Qbadev\TerytBundle\Entity\Powiat $powiaty)
    {
        $this->powiaty[] = $powiaty;

        return $this;
    }

    /**
     * Remove powiaty.
     *
     * @param \Qbadev\TerytBundle\Entity\Powiat $powiaty
     */
    public function removePowiaty(\Qbadev\TerytBundle\Entity\Powiat $powiaty)
    {
        $this->powiaty->removeElement($powiaty);
    }

    /**
     * Get powiaty.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPowiaty()
    {
        return $this->powiaty;
    }

    /**
     * Add gminy.
     *
     * @param \Qbadev\TerytBundle\Entity\Gmina $gminy
     *
     * @return Wojewodztwo
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
     * Add miejscowosci.
     *
     * @param \Qbadev\TerytBundle\Entity\Miejscowosc $miejscowosci
     *
     * @return Wojewodztwo
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
}
