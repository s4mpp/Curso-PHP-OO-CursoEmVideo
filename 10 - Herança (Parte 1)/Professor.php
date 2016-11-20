<?php 

require_once 'Pessoa.php';


class Professor extends Pessoa {

	private $especialidade;
	private $salario;

	public function receberAumento($valor) {
		$this->salario += $valor;
	}




    /**
     * Gets the value of salario.
     *
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Sets the value of salario.
     *
     * @param mixed $salario the salario
     *
     * @return self
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Gets the value of especialidade.
     *
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Sets the value of especialidade.
     *
     * @param mixed $especialidade the especialidade
     *
     * @return self
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }
}