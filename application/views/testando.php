<!DOCTYPE html>
	<html> 
		<head> 
			<title>
				Ola Mundo!
			</title>
		</head> 
		<body> 
			<h1>
				Testando CodeIgniter. 
			</h1> 
			<br/>
			<p>
				<?php 
					echo $felipe; 
					/*ecoa a session criada no controler*/
				?>
			</p>
				<?php
					$text = array("nome"=>"teste");
					$attributes = array('class' => 'email', 'id' => 'myform');
					echo form_open('#', $attributes, $text);
					/*
						ecoa o formulario criado no controler os paramentros dentro do metodo são as actions
						form_open(action, atributos, input hidden);
					*/
						echo form_input('username1', 'johndoe');
						$data = array(
							'name'        => 'username',
							'id'          => 'username',
							'placeholder'       => 'johndoe',
							'maxlength'   => '100'
						);
						echo "<br/>";
						echo form_input($data);
						/*ecoa as inputs*/
						echo "<br/>";
						$options = array(
							'small'  => 'Small Shirt',
							'med'    => 'Medium Shirt',
							'large'   => 'Large Shirt',
							'xlarge' => 'Extra Large Shirt',
						);
						$js = "id='shirts'";
						echo form_dropdown('shirts', $options, 'large', $js);
						/*
							ecoa select
							form_dropdown(name, options e values, selected, id)
						*/
						echo "<br/>";
						
						$data = array(
							'name'   => 'newsletter',
							'id'     => 'newsletter',
							'value'  => 'accept',
							'checked'=> TRUE,
							'style'  => 'margin:10px',
						);

						echo form_checkbox($data);
						/*ecoa checkbox form_radio() ´similar*/
						
						echo "<br/>";
						
						$data = array(
							'name' => 'button',
							'id' => 'button',
							'value' => 'true',
							'type' => 'button',
							'content' => 'button'
						);

						echo form_button($data);
						/*button*/
						
						echo "<br/>";
						
						echo form_submit('mysubmit', 'Submit Post!');
						/*submit*/
					echo form_close();
				?>
		</body> 
	</html>
