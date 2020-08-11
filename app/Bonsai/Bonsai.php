<?php

namespace App\Bonsai;

class Bonsai 
{
     // Atributos
     public $tipo;
     public $nComun;
     public $nIndividual; 

    public function  __construct($tipo='', $nComun='', $nIndividual='') 
    {
        $this->tipo = $tipo;
        $this->nComun = $nComun;
        $this->$nIndividual = $nIndividual;
    }

    public function getRiegoBonsai($mes, $tipo) 
    {
        $a_verano = ["JULIO","AGOSTO"];
        $riego = "";

        if (in_array(strtoupper($mes),$a_verano)) {
            $riego = "Muy Frecuente";
        } else {
            switch (strtoupper($tipo)) {
                case "MANZANO": $riego = "Frecuente";
                break;
                case "OLMO": $riego = "Muy Frecuente";
                break;
                case "FICUS": $riego = "Poco Frecuente";
                break;
                case "OLIVO": $riego = "Poco Frecuente";
                break;
            }
        }
        return $riego;
    }

    public function getCuandoAbono($ultimoAbono = 30) 
    {    
        $proximoAbono = "";

        if ($ultimoAbono >= 30) {
            $proximoAbono = "Primavera u Otoño";
        }

        return $proximoAbono;
    }

    public function getTransplante() 
    {
        return "Marzo";
    }

    public function getCuandoPulverizar($tipo) 
    {
        if (strtoupper($tipo) == "OLMO") {
            return true;
        } else {
            return false;
        }
    }
}