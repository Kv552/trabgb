<?php 
require "Conta.php";
require "Cliente.php";

$conta = new Conta(57349, "kv", 0.00);
$cliente = new Cliente("kevin", "000.000.000.00", "10/10/1000", $conta);

echo $cliente->retornarConta()->retornarNome();