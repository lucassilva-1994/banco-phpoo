<?php

require_once('src/Conta.php');

$primeiraConta = new Conta();
$primeiraConta->nomeTitular = "Pessoa 01";
$primeiraConta->cpfTitular = "539.332.150-30";
$primeiraConta->saldo = 200;

$segundaConta = new Conta();
$segundaConta->nomeTitular = "Pessoa 02";
$segundaConta->cpfTitular = "123.814.290-77";
$segundaConta->saldo = 400;

$primeiraConta->sacar(198);
$segundaConta->sacar(404);
print "<pre>";
var_dump([$primeiraConta,$segundaConta]);
print "</pre>";