<?php 

require_once 'Animal.php';

class Ave extends Animal {
	private $corPena;

	public function alimentar() {
		echo p('comendo frutas');
	}

	public function emitirSom() {
		echo p('Som de ave');
	}

	public function locomover() {
		echo p('voando');
	}

	public function fazerNinho() {
		echo p('Construindo um ninho');
	}

    /**
     * Gets the value of corPena.
     *
     * @return mixed
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Sets the value of corPena.
     *
     * @param mixed $corPena the cor pena
     *
     * @return self
     */
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}