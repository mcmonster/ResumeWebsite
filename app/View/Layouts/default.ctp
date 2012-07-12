<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
							 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>R. Matt McCann</title>
	<?php
		echo $this->Html->meta('icon');

		// Load the layout stylings
		echo $this->Html->css('default');

		// Load the controller specific stylings
		echo $this->Html->css($this->params['controller']);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			&nbsp;
		</div>
		<div id="menu">
			<div id="menu_link">
				<?php 
					echo $this->Html->link('Home', array('controler' => 'profiles',
																	 'action' => 'welcome'),
															 array('class' => 'menu_link')); 
				?>
			</div>
			<div id="menu_link">
				<?php
					echo $this->Html->link('Education', array('controller' => 'educations',
																		   'action' => 'index'),
																	array('class' => 'menu_link'));
				?>
			</div>
			<div id="menu_link">
				<?php
					echo $this->Html->link('Work', array('controller' => 'jobs',
																	 'action' => 'index'),
															 array('class' => 'menu_link'));
				?>
			</div>
			<div id='menu_link'>
				<?php
					echo $this->html->link('Projects', array('controller' => 'projects',
																		  'action' => 'index'),
																  array('class' => 'menu_link'));
				?>
			</div>
			<div id='menu_link'>
				<?php
					echo $this->Html->link('Skills', array('controller' => 'skills',
																	   'action' => 'index'),
																array('class' => 'menu_link'));
				?>
			</div>
			<div id='menu_link'>
				<?php
					echo $this->Html->link('References', array('controller' => 'references',
																			 'action' => 'index'),
																	 array('class' => 'menu_link'));
				?>
			</div>
			<div id='menu_link'>
				<?php
					echo $this->Html->link('Contact', array('controller' => 'profiles',
																		 'action' => 'contact'),
																 array('class' => 'menu_link'));
				?>
			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</body>
</html>
