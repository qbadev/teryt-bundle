<?php

namespace Qbadev\TerytBundle\Entity;

/**
 * Ulica.
 */
class Ulica
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
    private $cecha;

    /**
     * @var string
     */
    private $nazwa_1;

    /**
     * @var string
     */
    private $nazwa_2;

    /**
     * @var string
     */
    private $sym;

    /**
     * @var string
     */
    private $sym_ul;

    /**
     * @var \DateTime
     */
    private $stan_na;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Qbadev\TerytBundle\Entity\Miejscowosc
     */
    private $miejscowosc;

    public function loadDataFromArray(array $object)
    {
        $this->pow = $object['POW'];
        $this->woj = $object['WOJ'];
        $this->gmi = $object['GMI'];
        $this->rodz_gmi = $object['RODZ_GMI'];
        $this->nazwa_1 = $object['NAZWA_1'];
        $this->nazwa_2 = $object['NAZWA_2'];
        $this->cecha = $object['CECHA'];
        $this->sym = $object['SYM'];
        $this->sym_ul = $object['SYM_UL'];
        $this->stan_na = new \DateTime(
                date('Y-m-d', strtotime($object['STAN_NA'])));
    }

    /**
     * Set woj.
     *
     * @param string $woj
     *
     * @return Ulica
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
     * @return Ulica
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
     * @return Ulica
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
     * @return Ulica
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
     * Set cecha.
     *
     * @param string $cecha
     *
     * @return Ulica
     */
    public function setCecha($cecha)
    {
        $this->cecha = $cecha;

        return $this;
    }

    /**
     * Get cecha.
     *
     * @return string
     */
    public function getCecha()
    {
        return $this->cecha;
    }

    /**
     * Set nazwa_1.
     *
     * @param string $nazwa1
     *
     * @return Ulica
     */
    public function setNazwa1($nazwa1)
    {
        $this->nazwa_1 = $nazwa1;

        return $this;
    }

    /**
     * Get nazwa_1.
     *
     * @return string
     */
    public function getNazwa1()
    {
        return $this->nazwa_1;
    }

    /**
     * Set nazwa_2.
     *
     * @param string $nazwa2
     *
     * @return Ulica
     */
    public function setNazwa2($nazwa2)
    {
        $this->nazwa_2 = $nazwa2;

        return $this;
    }

    /**
     * Get nazwa_2.
     *
     * @return string
     */
    public function getNazwa2()
    {
        return $this->nazwa_2;
    }

    /**
     * Set sym.
     *
     * @param string $sym
     *
     * @return Ulica
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
     * Set sym_ul.
     *
     * @param string $symUl
     *
     * @return Ulica
     */
    public function setSymUl($symUl)
    {
        $this->sym_ul = $symUl;

        return $this;
    }

    /**
     * Get sym_ul.
     *
     * @return string
     */
    public function getSymUl()
    {
        return $this->sym_ul;
    }

    /**
     * Set stan_na.
     *
     * @param \DateTime $stanNa
     *
     * @return Ulica
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
     * Set miejscowosc.
     *
     * @param \Qbadev\TerytBundle\Entity\Miejscowosc $miejscowosc
     *
     * @return Ulica
     */
    public function setMiejscowosc(\Qbadev\TerytBundle\Entity\Miejscowosc $miejscowosc = null)
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get miejscowosc.
     *
     * @return \Qbadev\TerytBundle\Entity\Miejscowosc
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }
}
