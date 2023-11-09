<?php

class NumerosArray{

    private $arregloNumeros;

    public function __construct($arregloNumeros){
        $this->arregloNumeros = $arregloNumeros;
    }

    public function sumarPares(){
        $sumaPares = 0;
        foreach ($this->arregloNumeros as $numero) {
            if ($numero % 2 == 0) {
                $sumaPares += $numero;
            }
        }
        return $sumaPares;
    }

    public function sumarImpares(){
        $sumaImpares = 0;
        foreach ($this->arregloNumeros as $numero) {
            if ($numero % 2 != 0) {
                $sumaImpares += $numero;
            }
        }
        return $sumaImpares;
    }

}

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8);
$resultados = new NumerosArray($numeros);
echo "La suma de los números pares es: " . $resultados->sumarPares() . PHP_EOL;
echo "La suma de los números impares es: " . $resultados->sumarImpares();

?>