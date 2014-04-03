<?php
	$this->load->view('includes_crud/header');
	$this->load->view('includes_crud/content');
        echo $titulo;
        if($tela != '') {
            $this->load->view('telas/'.$tela);
        }
	$this->load->view('includes_crud/footer');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>