<?php 
	class Testando extends CI_Controller{    
		
		function index(){  
			/*carrega a nossa view */ 	
			$this->data['felipe'] = 'felipe';
			/*$this->data[] recebe uma vaiaver e a ecoa na view*/
			$this->load->helper('form');
			/*cria o formulario */
			$this->load->view('testando',$this->data); 
			/*require_once*/
			//$this->form_validation->set_rules( 'user_name', 'username', 'required' );
			if ( $this->input->post( 'mysubmit' ) ) {
				//pega o submit
				echo 'ok';
				echo $user_name = $this->input->post( 'username1' );

			}
		}
		
		public function pagina(){
			//url http://localhost/CodeIgniter_2.1.2/index.php/testando/pagina
			/*
				criar um .htaccess no root para tirar essa porra de index
				com 
				RewriteEngine on
				#inicia o htaccess
				RewriteCond %{REQUEST_FILENAME} !-f
				#liga os arquivos
				RewriteCond %{REQUEST_FILENAME} !-d
				#ligado os diretorios
				RewriteRule ^(.*)$ index.php?url=$1
				#tudo que foi digitado na url vai para index.php
			*/
			$this->load->view('welcome_message');
		}
		
		public function soma($x, $y){
			echo $x + $y;
		}
		
		public function array_dados(){
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
			$this->load->view('array_dados', $dados);
		}
		
		//http://dev.rbtech.info/curso-de-codeigniter-para-iniciantes-aula-04/
	} 
?>
