<?php

namespace OpenBoleto;

/**
 * Febraban
 * 
 * @author  Matheus Lopes Santos <fale_com_lopez@hotmail.com>
 * @version 1.0.0
 * @since   03/10/2019
 */
class Febraban
{
    /**
     * @var string
     */
    protected $linhaDigitavel;

    /**
     * @var string
     */
    protected $numeroFebraban;

    /**
     * @param   string  $linhaDigitavel
     * @param   string  $numeroFebraban
     */
    public function __construct($linhaDigitavel, $numeroFebraban)
    {
        $this->linhaDigitavel   = $linhaDigitavel;
        $this->numeroFebraban   = $numeroFebraban;
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