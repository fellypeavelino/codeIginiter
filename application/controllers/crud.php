<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Crud extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->helper('form');
            /**
             * 
            $this->load->helper('url');
             * chamando helper via constructor
            */
        }

        public function index(){
            $dados = array(
                'titulo' => 'CRUD com CodeIgniter ',
                'tela' => ''
            );
            $this->load->view('crud', $dados);
            //http://dev.rbtech.info/curso-de-codeigniter-para-iniciantes-aula-06/
        }
        
        public function create(){
            $dados = array(
                'titulo' => 'CRUD Create ',
                'tela' => 'create'
            );
            $this->load->view('crud', $dados);
        }
        
        public function read(){
            $dados = array(
                'titulo' => 'CRUD Retrive ',
                'tela' => 'retrive'
            );
            $this->load->view('crud', $dados);
        }
        
        public function update(){
            $dados = array(
                'titulo' => 'CRUD Upadte ',
                'tela' => 'update'
            );
            $this->load->view('crud', $dados);
        }
        
        public function delete(){
            $dados = array(
                'titulo' => 'CRUD Delete ',
                'tela' => 'delete'
            );
            $this->load->view('crud', $dados);
        }
    }
?>
