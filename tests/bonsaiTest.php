<?php

use PHPUnit\Framework\TestCase;

use App\Bonsai\Bonsai;

class BonsaiTest extends TestCase {

    /** @test **/
    public function comprobar_riego_mes_tipo() 
    {
        $bonsai = new Bonsai;

        $tipoRiego = $bonsai->getRiegoBonsai('Abril', 'Manzano');

        $this->assertEquals('Frecuente', $tipoRiego);
    }

    /** @test **/
    public function comprobar_mes_para_transplantar() 
    {
        $bonsai = new Bonsai;

        $abono = $bonsai->getCuandoAbono(45);

        $this->assertEquals('Primavera u Otoño', $abono);
    }

    /** @test **/
    public function comprobar_cuando_transplantar() 
    {
        $bonsai = new Bonsai;

        $transplantar = $bonsai->getTransplante();

        $this->assertEquals('Marzo', $transplantar);
    }

    /** @test **/
    public function comprobar_si_pulverizar() 
    {
        $bonsai = new Bonsai;

        $pulverizar = $bonsai->getCuandoPulverizar('Olmo');

        $this->assertEquals(true, $pulverizar);
    }

    
}