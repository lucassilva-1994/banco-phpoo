<?php

require_once('src/Conta.php');

//Instânciando objetos.
$primeiraConta = new Conta();
$primeiraConta->nomeTitular = "Pessoa 01";
$primeiraConta->cpfTitular = "539.332.150-30";
$primeiraConta->saldo = 200;
$segundaConta = new Conta();
$segundaConta->nomeTitular = "Pessoa 02";
$segundaConta->cpfTitular = "123.814.290-77";
$segundaConta->saldo = 400;
$terceiraConta = new Conta();
$terceiraConta->nomeTitular = "Pessoa 03";
$terceiraConta->cpfTitular = "712.956.330-35";
$terceiraConta->saldo = 1200;


//Realizando saques nas contas abaixo.
$primeiraConta->sacar(198);
$segundaConta->sacar(10);
$terceiraConta->sacar(1100);

//Realizando depositos nas contas abaixo.
$primeiraConta->depositar(500);
$segundaConta->depositar(300);
$terceiraConta->depositar(1450);
print "<pre>";
var_dump([$primeiraConta,$segundaConta,$terceiraConta]);
print "</pre>";