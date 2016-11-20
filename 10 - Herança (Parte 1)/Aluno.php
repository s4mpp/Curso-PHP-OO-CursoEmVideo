<?php 

require_once 'Pessoa.php';

class Aluno extends Pessoa {

	private $matricula;
	private $curso;


	public function cancelarMatricula() {
		echo p('Matrícula cancelada');
	}






    /**
     * Gets the value of matricula.
     *
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Sets the value of matricula.
     *
     * @param mixed $matricula the matricula
     *
     * @return self
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Gets the value of curso.
     *
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Sets the value of curso.
     *
     * @param mixed $curso the curso
     *
     * @return self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}