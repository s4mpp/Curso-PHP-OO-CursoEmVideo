<?php 


class Livro implements iPublicacao {


	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;

	public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor) {
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->totPaginas = $totPaginas;
		$this->pagAtual = $pagAtual;
		$this->aberto = $aberto;
		$this->leitor = $leitor;
	}


	public function abrir() {
		if(!$this->getAberto()) {
			$this->setAberto(true);
			echo p('Livro aberto com sucesso.');

		} else {
			echo p('Livro já está aberto');
		}
	}

	public function fechar() {
		if($this->getAberto()) {
			$this->setAberto(false);
			echo p('Livro fechado com sucesso.');
		} else {
			echo p('Livro já esta fechado.');
		}
	}

	public function folhear($pag) {
		if(($this->getPagAtual() + $pag) <= $this->getTotPaginas()) {
			
			$this->setPagAtual($this->getPagAtual() + $pag);

			echo p('Livro folheado para a pagina '.$this->getPagAtual());
		} else {
			echo p('Não é possivel folhear para a pagina solicitada: '. ($this->getPagAtual() + $pag));
		}
	}

	public function avancarPag() {
		if($this->getAberto() && $this->getPagAtual() < $this->getTotPaginas()) {
			$this->setPagAtual($this->getPagAtual() + 1);
			echo p($this->leitor->getNome().' Avançando para a página '.$this->getPagAtual());
		} else {
			echo p('Não é possivel avançar a página');
		}
	}

	public function voltarPag() {
		if($this->getAberto() && $this->getPagAtual() > 1) {
			$this->setPagAtual($this->getPagAtual() - 1);
			echo p($this->leitor->getNome().' Voltando para a página '.$this->getPagAtual());
		} else {
			echo p('Não é possivel voltar a página');
		}
	}

	/**
	 * GETTERS and SETTERS
	 */

	public function getTitulo() {
		return $this->titulo;
	}

	public function getAutor() {
		return $this->autor;
	}

	public function getTotPaginas() {
		return $this->totPaginas;
	}

	public function getPagAtual() {
		return $this->pagAtual;
	}

	public function getAberto() {
		return $this->aberto;
	}

	public function getLeitor() {
		return $this->leitor;
	}

	private function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	private function setAutor($autor){
		$this->autor = $autor;
	}

	private function setTotPaginas($totPaginas){
		$this->totPaginas = $totPaginas;
	}

	private function setPagAtual($pagAtual){
		$this->pagAtual = $pagAtual;
	}

	private function setAberto($aberto){
		$this->aberto = $aberto;
	}

	private function setLeitor($leitor){
		$this->leitor = $leitor;
	}
}