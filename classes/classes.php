<?php

class Carro {
  public string $modelo;
  public string $marca;
  public string $chassi;
  public string $fabricante;

  public function ligar()
  {
    echo "carro ligado!\n";
  }

  public function desligar()
  {
    echo "carro desligado!\n";
  }

  public function acelerar()
  {
    echo "carro acelerando...\n";
  }

  public function frear()
  {
    echo "carro freando...\n";
  }
}

$corsa = new Carro();
$corsa->modelo     = "Corsa";
$corsa->marca      = "Chevrolet"; 
$corsa->chassi     = "ABC123";
$corsa->fabricante = "Chevrolet";

echo  $corsa->modelo ."\n";
$corsa->acelerar();

echo "\n";

$mustang = new Carro();
$mustang->modelo     = "Mustang 70";
$mustang->marca      = "Ford";
$mustang->chassi     = "AJ3FSA";
$mustang->fabricante = "Ford";

echo  $mustang->modelo ."\n";
$mustang->acelerar();
