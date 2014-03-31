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
				RewriteCond %{REQUEST_FILENAME} !-f
				RewriteCond %{REQUEST_FILENAME} !-d
				RewriteRule .* index.php/$0 [PT,L]
			*/
			$this->load->view('welcome_message');
		}
		
		public function soma($x, $y){
			echo $x + $y;
		}
	} 
?>
