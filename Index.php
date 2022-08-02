<?php

require_once('src/Conta.php');

//Instânciando objetos.
$primeiraConta = new Conta();
$primeiraConta->nomeTitular = "Pessoa 01";
$primeiraConta->cpfTitular = "539.332.150-30";
$segundaConta = new Conta();
$segundaConta->nomeTitular = "Pessoa 02";
$segundaConta->cpfTitular = "123.814.290-77";
$terceiraConta = new Conta();
$terceiraConta->nomeTitular = "Pessoa 03";
$terceiraConta->cpfTitular = "712.956.330-35";

//Realizando transferência
$primeiraConta->depositar(300);
$primeiraConta->transferir(100,$segundaConta);
print "Saldo da primeira conta: $primeiraConta->saldo.<br/>";
print "Saldo da segunda conta: $segundaConta->saldo.";


print "<pre>";
var_dump([$primeiraConta,$segundaConta,$terceiraConta]);
print "</pre>";