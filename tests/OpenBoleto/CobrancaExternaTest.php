<?php

namespace Tests\OpenBoleto;

use OpenBoleto\CobrancaExterna;

class CobrancaExternaTest extends \PhpUnit_Framework_TestCase
{
    public function testCobrancaExterna()
    {
        $nossoNumero    = '24555000000078875-7';
        $numeroFebraban = '23792803400000180002856090000005908205815000';
        $linhaDigitavel = '23792.85600 90000.005901 82058.150002 2 80340000018000';

        $cobranca = new CobrancaExterna($nossoNumero, $linhaDigitavel, $numeroFebraban);
        $this->assertEquals($nossoNumero, $cobranca->getNossoNumero());
        $this->assertEquals($linhaDigitavel, $cobranca->getLinhaDigitavel());
        $this->assertEquals($numeroFebraban, $cobranca->getNumeroFebraban());
    }
}