<?php

class Conta{
	private string $cpfTitular;
	private string $nomeTitular;
	private float $saldo;

	public function __construct(string $cpfTitular, string $nomeTitular){
		$this->cpfTitular = $cpfTitular;
		$this->nomeTitular = $nomeTitular;
		$this->saldo = 0;
	}

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

	public function recuperaCpfTitular():string{
		return $this->cpfTitular;
	}

	public function recuperaNomeTitular():string{
		return $this->nomeTitular;
	}

	public function recuperaSaldo():float{
		return $this->saldo;
		
	}
}