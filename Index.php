<?php

require_once('src/Conta.php');

//Instânciando objetos.
$primeiraConta = new Conta();
$primeiraConta->defineNomeTitular("Pessoa 01");
$primeiraConta->defineCpfTitular("087.769.861-78");
$primeiraConta->deposita(500);
$primeiraConta->saca(131);

print "<pre>";
print "Titular da conta: ".$primeiraConta->recuperaNomeTitular()."<br/>";
print "CPF do titular: ".$primeiraConta->recuperaCpfTitular()."<br/>";
print "Saldo: R$ ".$primeiraConta->recuperaSaldo();
print "</pre>";
