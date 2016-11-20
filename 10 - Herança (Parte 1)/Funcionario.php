<?php 

require_once 'Pessoa.php';

class Funcionario extends Pessoa {

	private $setor;
	private $trabalhando;


	public function mudarTrabalho() {
		$this->trabalhando = !$this->trabalhando;
	}


    /**
     * Gets the value of setor.
     *
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Sets the value of setor.
     *
     * @param mixed $setor the setor
     *
     * @return self
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Gets the value of trabalhando.
     *
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Sets the value of trabalhando.
     *
     * @param mixed $trabalhando the trabalhando
     *
     * @return self
     */
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}