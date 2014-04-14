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
            $this->load->library('form_validation');//biblioteca de validação de formulario
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
            //conexao com banco auto load libirys
            //$autoload['libraries'] = array('database');
            //tradução para portugues
            //https://github.com/CIBr/CodeIgniter-Portuguese-BR
            $this->form_validation->set_rules('login','Login','required|min_length[5]|max_length[12]');
            //is_unique[tabela.coluna]
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[cursos.email]');
            $this->form_validation->set_rules('senha', 'Senha', 'required|max_length[10]');
            //personalizar mensagens
            //$this->form_validation->set_menssage('matches', 'mensagem');
            $this->form_validation->set_rules('senha2', 'Repita a senha', 'required|max_length[10]|matches[senha]');
            //matches[senha] verifica se valores de campos estão iguais
            //$this->form_validation->set_rules(name, menssage error, rules);
            //validação de formulario
            if($this->input->post('Salvar')){
              
            }
            if($this->form_validation->run() == false){
                //verica se a validação ocorreu
                
            }else{
                echo "validação passou";
            }
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
