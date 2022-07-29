<?php

class Conta{
	public string $cpfTitular;
	public string $nomeTitular;
	public float $saldo;

	public function sacar(float $valorASacar): void{
		if ($valorASacar > $this->saldo) 
			print "Saldo indisponível <br/>";
		 else
			$this->saldo -= $valorASacar;
		
	}
}