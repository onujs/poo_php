<?php

class Nequi {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function depositar($cantidad) {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
            echo"Te depositaron $cantidad en tu cuenta $this->titular, Saldo actual: $this->saldo";
        }
        else {
            echo"La cantidad a depositar debe ser mayo a 0 (cero)";
        }
    }


    public function retirar($cantidad) {
        if ($cantidad > 0 && $cantidad <= $this -> saldo) {
            $this->saldo -= $cantidad;
            echo"Retiraste $cantidad de tu cuenta $this->titular, Saldo actual: $this->saldo";
        }
        else {
            echo "La cantidad a retirar excede lo que tienes disponible";
        }
    }

    public function getInformacion() {
        return "Titular $this->titular, Saldo: $this->saldo";
    }
}

$victor = new Nequi('Victor Cruz', 0);

$victor->depositar(50000);
echo "<br/>";
$victor->depositar(30000);
echo "<br/>";
$victor->retirar(40000);