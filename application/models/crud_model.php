<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Crud_model extends CI_Model{
        
        public function do_insert($dados = null){
            if($dados != null){
                $this->db->insert('cursos',$dados);
                //$this->db->insert(table,array)
                $this->session->set_flashdata("cadastrook","Cadastro incluido com sucesso");
                //$this->session->set_flashdata() só funciona quando é redirecionada
                redirect('crud/create');
            }
        }
    }
?>
