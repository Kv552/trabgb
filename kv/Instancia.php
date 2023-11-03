<?php 
require "Conta.php";
require "Cliente.php";

$cliente = new Cliente( 2452792, 10.00, "Kevin", "000.000.000-00", "Três Marias", "20/05/2005");

echo $cliente->retornarNumero().PHP_EOL;
echo $cliente->retornarSaldo().PHP_EOL;
echo $cliente->retornarNome().PHP_EOL;
echo $cliente->retornarCpf().PHP_EOL;
echo $cliente->retornarEndereco().PHP_EOL;
echo $cliente->retornarData().PHP_EOL;