<?php

require_once('src/Conta.php');

//Instânciando objetos.
$primeiraConta = new Conta("675.652.930-75", "Pessoa 01");
$primeiraConta->deposita(500);
$primeiraConta->saca(150);


$segundaConta = new Conta("010.444.250-67", "Pessoa 02");
$segundaConta->deposita(1200);
$segundaConta->saca(1000);

print "<pre>";
print "Dados da primeira conta<br/>";
print "Titular da conta: ".$primeiraConta->recuperaNomeTitular()."<br/>";
print "CPF do titular: ".$primeiraConta->recuperaCpfTitular()."<br/>";
print "Saldo: R$ ".number_format($primeiraConta->recuperaSaldo(),2,",",".");
print "</pre>";

print "<pre>";
print "Dados da segunda conta<br/>";
print "Titular da conta: ".$segundaConta->recuperaNomeTitular()."<br/>";
print "CPF do titular: ".$segundaConta->recuperaCpfTitular()."<br/>";
print "Saldo: R$ ".number_format($segundaConta->recuperaSaldo(),2,",",".");
print "</pre>";
