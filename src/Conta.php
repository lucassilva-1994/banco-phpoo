<?php

class Conta{
	private string $cpfTitular;
	private string $nomeTitular;
	private float $saldo = 0;

	public function saca(float $valorASacar): void{
		if ($valorASacar > $this->saldo){
			print "Saldo indisponível. <br/>";
			return;
		}
		$this->saldo -= $valorASacar;
	}

	public function deposita(float $valorADepositar):void{
		if($valorADepositar <= 0){
			print "Valor precisa ser maior do que zero.";
			return;
		}
		$this->saldo += $valorADepositar;
	}

	public function transfere(float $valorATransferir, Conta $contaDestino): void
	{
	    if ($valorATransferir > $this->saldo) {
	        print "Saldo indisponível";
	        return;
	    } 
	    $this->saca($valorATransferir);
	    $contaDestino->deposita($valorATransferir);
	}

	public function defineCpfTitular(string $cpf){
		$this->cpfTitular = $cpf;
	}

	public function defineNomeTitular(string $nome){
		$this->nomeTitular = $nome;
	}

	public function recuperaCpfTitular(){
		return $this->cpfTitular;
	}

	public function recuperaNomeTitular(){
		return $this->nomeTitular;
	}

	public function recuperaSaldo(){
		return $this->saldo;
	}
}