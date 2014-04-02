<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Site extends CI_Controller {
		//Master page
		public function index(){
			$dados = array(
				'titulo' => 'este titul foi passado via controler',
				'texto' => 'texto enviado pelo contrlador',
				'menu' => array(
					0 => "<a href=''>Home</a>",
					1 => "<a href=''>Sobre</a>",
					2 => "<a href=''>Serviços</a>",
					3 => "<a href=''>Contato</a>"
				),
				'segment' => $this->uri->segment(2)
			);
			//passando variaveis simples e cmpostas pelo controller
			//capitura do segmento da url $this->uri->segment(numero do segmento)
			$this->load->view('site', $dados);
		}

		public function Contato(){
			$dados = array(
				'titulo' => 'este é  segundo tituli foi passado via controler',
				'texto' => ' este é  segundo texto enviado pelo contrlador',
				'menu' => array(
					0 => "<a href=''>Home</a>",
					1 => "<a href=''>Sobre</a>",
					2 => "<a href=''>Serviços</a>",
					3 => "<a href=''>Contato</a>"
				),
				'segment' => $this->uri->segment(2)
			);
			//passando variaveis simples e cmpostas pelo controller
			//capitura do segmento da url $this->uri->segment(numero do segmento)
			$this->load->view('site', $dados);
		}
	}
?>
