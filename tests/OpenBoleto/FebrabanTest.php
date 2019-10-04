<?php

namespace Tests\OpenBoleto;

use OpenBoleto\Febraban;

class FebrabanTest extends \PhpUnit_Framework_TestCase
{
    public function testClasseFebraban()
    {
        $numeroFebraban = '23792803400000180002856090000005908205815000';
        $linhaDigitavel = '23792.85600 90000.005901 82058.150002 2 80340000018000';

        $febraban = new Febraban($linhaDigitavel, $numeroFebraban);

        $this->assertInstanceOf(Febraban::class, $febraban);
        $this->assertEquals($numeroFebraban, $febraban->getNumeroFebraban());
        $this->assertEquals($linhaDigitavel, $febraban->getLinhaDigitavel());
    }
}