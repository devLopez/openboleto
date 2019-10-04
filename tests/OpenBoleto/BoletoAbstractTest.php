<?php

namespace Tests\OpenBoleto;

use OpenBoleto\Febraban;

class BoletoAbstractTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiateShouldSetDefaultResourcePath()
    {
        $bank = new BancoMock();
        $this->assertTrue(file_exists($bank->getResourcePath()));
    }
    
    public function testShouldReturnUserResourcePathIfPassed()
    {
        $bank = new BancoMock(array('resourcePath' => __DIR__));
        $this->assertEquals(__DIR__, $bank->getResourcePath());
    }

    public function testInvalidCarteiraExceptionsShouldBeThrown()
    {
        $this->setExpectedException('OpenBoleto\\Exception');
        new BancoMock(array(
            'carteira' => 99,
        ));
    }

    public function testValidCarteiraShouldWork()
    {
        $instance = new BancoMock(array(
            'carteira' => 10,
        ));

        $this->assertInstanceOf('OpenBoleto\BoletoAbstract', $instance);
    }

    public function testUsoClasseFebraban()
    {
        $instance = new BancoMock([
            'carteira' => 10
        ]);

        $numeroFebraban = '23792803400000180002856090000005908205815000';
        $linhaDigitavel = '23792.85600 90000.005901 82058.150002 2 80340000018000';

        $febraban = new Febraban($linhaDigitavel, $numeroFebraban);

        $instance->setFebraban($febraban);
    
        $this->assertInstanceOf(Febraban::class, $instance->getFebraban());
        $this->assertEquals($numeroFebraban, $instance->getNumeroFebraban());
        $this->assertEquals($linhaDigitavel, $instance->getLinhaDigitavel());
    }
}
