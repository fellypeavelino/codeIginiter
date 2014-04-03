		<ul><!--
                        Os anchor são carregados por meio de helpers
                        $this->load->helper('url');//sobre carrega o sistema
                        ou altomaticamente pelo config/autoload.php em 
                        $autoload['helper']// não sobre carrega o sistema
                    -->
			<li>
				<?php echo anchor('crud/create','Create');?>
			</li>
			<li>
				<?php echo anchor('crud/read','Read');?>
			</li>
			<li>
				<?php echo anchor('crud/update','Update');?>
			</li>
			<li>
				<?php echo anchor('crud/delete','Delete');?>
			</li>
		</ul>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
