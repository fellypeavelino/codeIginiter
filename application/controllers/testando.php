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
			}
		}
		
		public function pagina(){
			$this->load->view('welcome_message');
		}
	} 
?>
