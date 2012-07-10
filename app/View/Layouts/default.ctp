<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			<?php 
				echo $this->Html->link('Home', array('controller' => 'profiles',
																 'action' => 'welcome'),
														 array('class' => 'default_menu'));
				echo '<br />';
				echo $this->Html->link('Education', array('controller' => 'educations',
																		'action' => 'index'),
																array('class' => 'default_menu'));
				echo '<br />';
				echo $this->Html->link('Work', array('controller' => 'jobs',
																 'action' => 'index'),
														 array('class' => 'default_menu'));
				echo '<br />';
				echo $this->Html->link('Projects', array('controller' => 'projects',
																	  'action' => 'index'),
															  array('class' => 'default_menu'));
				echo '<br />';
				echo $this->Html->link('Skills', array('controller' => 'skills',
																   'action' => 'index'),
															array('class' => 'default_menu'));
				echo '<br />';
				echo $this->Html->link('References', array('controller' => 'references',
																		 'action' => 'index'),
																 array('class' => 'default_menu'));
				echo '<br />';
				echo $this->Html->link('Contact', array('controller' => 'profiles',
																	 'action' => 'contact'),
															 array('class' => 'default_menu'));
			?>
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
