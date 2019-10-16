<?php

namespace OpenBoleto;

/**
 * CobrancaExterna
 *
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.0.0
 * @since   15/10/2019
 * @package OpenBoleto
 */
class CobrancaExterna
{
    /**
     * @var string
     */
    protected $nossoNumero;

    /**
     * @var string
     */
    protected $linhaDigitavel;

    /**
     * @var string
     */
    protected $numeroFebraban;

    /**
     * @param   string  $nossoNumero
     * @param   string  $linhaDigitavel
     * @param   string  $numeroFebraban
     */
    public function __construct($nossoNumero, $linhaDigitavel, $numeroFebraban)
    {
        $this->nossoNumero = $nossoNumero;
        $this->linhaDigitavel = $linhaDigitavel;
        $this->numeroFebraban = $numeroFebraban;
    }

    /**
     * @return  string
     */
    public function getNossoNumero()
    {
        return $this->nossoNumero;
    }

    /**
     * @return  string
     */
    public function getLinhaDigitavel()
    {
        return $this->linhaDigitavel;
    }

    /**
     * @return  string
     */
    public function getNumeroFebraban()
    {
        return $this->numeroFebraban;
    }
}