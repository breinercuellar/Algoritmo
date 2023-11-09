
<?php
class FactorialNombre {
  private $numero;

  public function __construct($numero) {
    $this->numero = $numero;
  }

  public function calcularFactorial() {
    $factorial = 1;
    
    for ($i = 1; $i <= $this->numero; $i++) {
      $factorial *= $i;
    }
    return $factorial;
  }
}

$numero = 6;
$factorialNombre = new FactorialNombre($numero);
echo $numero . "! = " . $factorialNombre->calcularFactorial();



