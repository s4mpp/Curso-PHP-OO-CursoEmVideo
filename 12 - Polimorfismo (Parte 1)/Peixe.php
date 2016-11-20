<?php 

require_once 'Animal.php';

class Peixe extends Animal {
	private $corEscama;

	public function alimentar() {
		echo p('comendo substancias');
	}

	public function emitirSom() {
		echo p('Peixe nao faz som');
	}

	public function locomover() {
		echo p('nadando');
	}

	public function soltarBolha() {
		echo p('SOltou bolha');
	}



    /**
     * Gets the value of corEscama.
     *
     * @return mixed
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Sets the value of corEscama.
     *
     * @param mixed $corEscama the cor escama
     *
     * @return self
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}