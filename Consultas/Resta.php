<?php
class Resta {
    public $n1;
    public $n2;

    public function __construct($num1, $num2) {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function Resta() {
        return $this->n1 - $this->n2;
    }
}

$num1 = $_POST['numero1']; 
$num2 = $_POST['numero2'];

$total = new Resta($num1, $num2);
$resultado = $total->Resta();
echo "El resultado de la Resta es: " . $resultado;

?>