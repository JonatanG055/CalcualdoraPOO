<?php
class Suma {
    public $n1;
    public $n2;

    public function __construct($num1, $num2) {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function sumar() {
        return $this->n1 + $this->n2;
    }
}

$num1 = $_POST['numero1']; 
$num2 = $_POST['numero2'];

$total = new Suma($num1, $num2);
$resultado = $total->sumar();
echo "El resultado de la suma es: " . $resultado;

?>