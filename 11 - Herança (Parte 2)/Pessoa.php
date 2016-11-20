<?php 


abstract class Pessoa {

	private $nome;
	private $idade;
	private $sexo;

	public final function fazerAniversario() {
		$this->idade++;
	}



    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
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
     * Gets the value of sexo.
     *
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

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
     * Sets the value of sexo.
     *
     * @param mixed $sexo the sexo
     *
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}