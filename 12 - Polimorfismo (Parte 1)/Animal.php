<?php

abstract class Animal {
	protected $peso;
	protected $idade;
	protected $membros;

	abstract function locomover();
	abstract function alimentar();
	abstract function emitirSom();




    /**
     * Gets the value of peso.
     *
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Gets the value of idade.
     *
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Gets the value of membros.
     *
     * @return mixed
     */
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Sets the value of peso.
     *
     * @param mixed $peso the peso
     *
     * @return self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Sets the value of idade.
     *
     * @param mixed $idade the idade
     *
     * @return self
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Sets the value of membros.
     *
     * @param mixed $membros the membros
     *
     * @return self
     */
    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }
}