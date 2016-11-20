<?php

require_once 'Animal.php';

class Reptil extends Animal {
	private $corEscama;

	function locomover() {
		echo p('rastejando');
	}

	function alimentar() {
		echo p('Comendo vegetais');
	}

	function emitirSom() {
		echo p('Som de reptil');
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