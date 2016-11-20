<?php

require_once 'Animal.php';

class Mamifero extends Animal {
	private $corPelo;

	function locomover() {
		echo p('correndo');
	}

	function alimentar() {
		echo p('Mamando');
	}

	function emitirSom() {
		echo p('Som de mamifero');
	}


    /**
     * Gets the value of corPelo.
     *
     * @return mixed
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Sets the value of corPelo.
     *
     * @param mixed $corPelo the cor pelo
     *
     * @return self
     */
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}