<!--conteudo da masterpage-->
<h3>Array de dados</h3>
	<br/>
		<?php
			echo "<h2>".$titulo."</h2>";
			echo "<br/>". $texto;
			$this->load->helper('form');
			echo "<br/>";
			echo form_dropdown('menu', $menu);
		?>
	<br/>
<nav>
	<ul>
		<?php 
			foreach($menu as $key => $value){
				echo "<li><a href='#' name='".$key."'>".$value."</a></li>";
			}
			echo "<br/>";
			echo $segment;
		?>
	</ul>
</nav>
