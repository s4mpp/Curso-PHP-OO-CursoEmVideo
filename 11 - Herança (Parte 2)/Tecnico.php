<?php 


final class Tecnico extends Aluno {

	private $registroProfissional;


	public function praticar() {
		echo p('O aluno '.$this->getNome().' Está praticando');
	}




    /**
     * Gets the value of registroProfissional.
     *
     * @return mixed
     */
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }

    /**
     * Sets the value of registroProfissional.
     *
     * @param mixed $registroProfissional the registro profissional
     *
     * @return self
     */
    public function setRegistroProfissional($registroProfissional)
    {
        $this->registroProfissional = $registroProfissional;

        return $this;
    }
}