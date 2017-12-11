<?php

namespace Qbadev\TerytBundle\Entity;

/**
 * Miejscowosc.
 */
class Miejscowosc
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
    private $rodz_gmi;

    /**
     * @var string
     */
    private $rm;

    /**
     * @var string
     */
    private $mz;

    /**
     * @var string
     */
    private $nazwa;

    /**
     * @var string
     */
    private $sym;

    /**
     * @var string
     */
    private $sympod;

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
    private $ulice;

    /**
     * @var \Qbadev\TerytBundle\Entity\Wojewodztwo
     */
    private $wojewodztwo;

    /**
     * @var \Qbadev\TerytBundle\Entity\Powiat
     */
    private $powiat;

    /**
     * @var \Qbadev\TerytBundle\Entity\Gmina
     */
    private $gmina;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->ulice = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function loadDataFromArray(array $object)
    {
        $this->pow = $object['POW'];
        $this->woj = $object['WOJ'];
        $this->gmi = $object['GMI'];
        $this->rodz_gmi = $object['RODZ_GMI'];
        $this->nazwa = $object['NAZWA'];
        $this->rm = $object['RM'];
        $this->mz = $object['MZ'];
        $this->sym = $object['SYM'];
        $this->sympod = $object['SYMPOD'];
        $this->stan_na = new \DateTime(
                date('Y-m-d', strtotime($object['STAN_NA'])));
    }

    /**
     * Set woj.
     *
     * @param string $woj
     *
     * @return Miejscowosc
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
     * @return Miejscowosc
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
     * @return Miejscowosc
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
     * Set rodz_gmi.
     *
     * @param string $rodzGmi
     *
     * @return Miejscowosc
     */
    public function setRodzGmi($rodzGmi)
    {
        $this->rodz_gmi = $rodzGmi;

        return $this;
    }

    /**
     * Get rodz_gmi.
     *
     * @return string
     */
    public function getRodzGmi()
    {
        return $this->rodz_gmi;
    }

    /**
     * Set rm.
     *
     * @param string $rm
     *
     * @return Miejscowosc
     */
    public function setRm($rm)
    {
        $this->rm = $rm;

        return $this;
    }

    /**
     * Get rm.
     *
     * @return string
     */
    public function getRm()
    {
        return $this->rm;
    }

    /**
     * Set mz.
     *
     * @param string $mz
     *
     * @return Miejscowosc
     */
    public function setMz($mz)
    {
        $this->mz = $mz;

        return $this;
    }

    /**
     * Get mz.
     *
     * @return string
     */
    public function getMz()
    {
        return $this->mz;
    }

    /**
     * Set nazwa.
     *
     * @param string $nazwa
     *
     * @return Miejscowosc
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
     * Set sym.
     *
     * @param string $sym
     *
     * @return Miejscowosc
     */
    public function setSym($sym)
    {
        $this->sym = $sym;

        return $this;
    }

    /**
     * Get sym.
     *
     * @return string
     */
    public function getSym()
    {
        return $this->sym;
    }

    /**
     * Set sympod.
     *
     * @param string $sympod
     *
     * @return Miejscowosc
     */
    public function setSympod($sympod)
    {
        $this->sympod = $sympod;

        return $this;
    }

    /**
     * Get sympod.
     *
     * @return string
     */
    public function getSympod()
    {
        return $this->sympod;
    }

    /**
     * Set stan_na.
     *
     * @param \DateTime $stanNa
     *
     * @return Miejscowosc
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
     * Add ulice.
     *
     * @param \Qbadev\TerytBundle\Entity\Ulica $ulice
     *
     * @return Miejscowosc
     */
    public function addUlice(\Qbadev\TerytBundle\Entity\Ulica $ulice)
    {
        $this->ulice[] = $ulice;

        return $this;
    }

    /**
     * Remove ulice.
     *
     * @param \Qbadev\TerytBundle\Entity\Ulica $ulice
     */
    public function removeUlice(\Qbadev\TerytBundle\Entity\Ulica $ulice)
    {
        $this->ulice->removeElement($ulice);
    }

    /**
     * Get ulice.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUlice()
    {
        return $this->ulice;
    }

    /**
     * Set wojewodztwo.
     *
     * @param \Qbadev\TerytBundle\Entity\Wojewodztwo $wojewodztwo
     *
     * @return Miejscowosc
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
     * @return Miejscowosc
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

    /**
     * Set gmina.
     *
     * @param \Qbadev\TerytBundle\Entity\Gmina $gmina
     *
     * @return Miejscowosc
     */
    public function setGmina(\Qbadev\TerytBundle\Entity\Gmina $gmina = null)
    {
        $this->gmina = $gmina;

        return $this;
    }

    /**
     * Get gmina.
     *
     * @return \Qbadev\TerytBundle\Entity\Gmina
     */
    public function getGmina()
    {
        return $this->gmina;
    }
}
