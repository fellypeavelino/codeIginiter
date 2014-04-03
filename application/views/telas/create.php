<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo basename(__FILE__);
    echo form_open('crude/create');
        $nome = array(
            'id' => 'nome',
            'name' => 'nome',
            'autofocus'
        );
        echo form_label('Nome Completo: ');
        echo form_input($nome);
        echo "<br/>";
        echo "<br/>";
        $email = array(
            'id' => 'email',
            'name' => 'email',
        );
        echo form_label('Email: ');
        echo form_input($email);
        echo "<br/>";
        echo "<br/>";
        $login = array(
            'id' => 'login',
            'name' => 'login',
        );
        echo form_label('login: ');
        echo form_input($login);
        echo "<br/>";
        echo "<br/>";
        $senha = array(
            'id' => 'nome',
            'name' => 'nome',
        );
        echo form_label('senha: ');
        echo form_password($senha);
        echo "<br/>";
        echo "<br/>";
        $senha2 = array(
            'id' => 'nome',
            'name' => 'nome',
        );
        echo form_label('repita a senha: ');
        echo form_password($senha2);
        echo "<br/>";
        echo "<br/>";
        echo form_submit('Salvar', 'Salvar');
        //http://dev.rbtech.info/curso-de-codeigniter-para-iniciantes-aula-06/
    echo form_close();
?>
