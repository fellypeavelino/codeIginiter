<?php 
	class Testando extends CI_Controller{    
		
		function index(){                 
			/*carrega a nossa view */ 
				
			$this->data['felipe'] = 'felipe';
			/*$this->data[] recebe uma vaiaver e a ecoa na view*/
			$this->load->view('testando',$this->data);     
		}
	} 
?>
