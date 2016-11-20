<?php

final class Bolsista extends Aluno {

	private $bolsa;


	public function renovarBolsa() {
		echo p('Bolsa renovada com sucesso');
	}


	public function pagarMensalidade() {
		echo p($this->getNome().' É bolsista e paga com desconto');
	}


    /**
     * Gets the value of bolsa.
     *
     * @return mixed
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Sets the value of bolsa.
     *
     * @param mixed $bolsa the bolsa
     *
     * @return self
     */
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}