<?php
class Division{
    public $n1;
    public $n2;

    public function __construct($num1, $num2) {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function Division() {
        return $this->n1 / $this->n2;
    }
}

$num1 = $_POST['numero1']; 
$num2 = $_POST['numero2'];

$total = new Division($num1, $num2);
$resultado = $total->Division();
echo "El resultado de la Division es: " . $resultado;

?>