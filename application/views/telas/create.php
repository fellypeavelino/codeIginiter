<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo basename(__FILE__);
    echo validation_errors('<p>','<p>'); 
    //retorno mensagem de erro 
    //validation_errors(); ou
    //validation_errors(<prefixo>,<sufixo>);
    if($this->session->flashdata("cadastrook")){
        //pegar o session criada no model
        echo "<p>".$this->session->flashdata("cadastrook")."</p>";
        //para usar $this->session->flashdata() necessario ir no config e criar uma chave
        //$config['encryption_key'] = 'chave'
    }
    echo form_open('crud/create');
        $nome = array(
            'id' => 'nome',
            'name' => 'nome',
        );
        echo form_label('Nome Completo: ');
        echo form_input($nome, set_value('nome'),'autofocus');
        // set_value('name') mantem dados apos submit 
        echo "<br/>";
        echo "<br/>";
        $email = array(
            'id' => 'email',
            'name' => 'email',
        );
        echo form_label('Email: ');
        echo form_input($email, set_value('email'));
        echo "<br/>";
        echo "<br/>";
        $login = array(
            'id' => 'login',
            'name' => 'login',
        );
        echo form_label('login: ');
        echo form_input($login, set_value('login'));
        echo "<br/>";
        echo "<br/>";
        $senha = array(
            'id' => 'senha',
            'name' => 'senha',
        );
        echo form_label('senha: ');
        echo form_password($senha, set_value('senha'));
        echo "<br/>";
        echo "<br/>";
        $senha2 = array(
            'id' => 'senha2',
            'name' => 'senha2',
        );
        echo form_label('repita a senha: ');
        echo form_password($senha2, set_value('senha2'));
        echo "<br/>";
        echo "<br/>";
        echo form_submit('Salvar', 'Salvar');
        //http://dev.rbtech.info/curso-de-codeigniter-para-iniciantes-aula-06/
    echo form_close();
?>
