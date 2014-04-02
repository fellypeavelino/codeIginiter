<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Crud extends CI_Controller {
        public function index(){
            $dados = array(
                'titulo' => 'CRUD com CodeIgniter ',
                'tela' => ''
            );
            $this->load->view('crud', $dados);
            //http://dev.rbtech.info/curso-de-codeigniter-para-iniciantes-aula-06/
        }
    }
?>
