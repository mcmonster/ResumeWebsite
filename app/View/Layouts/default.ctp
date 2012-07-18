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
		echo $this->Html->css('summary');

		// Load the controller specific stylings
		echo $this->Html->css($this->params['controller']);
		
		// Load the layout scripts
		echo $this->Html->script('default');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body onload="draw()">
	<div id="gradient">
		<div id="anchor_line_top_left">
			<div id="anchor">
				<canvas id="anchor_canvas" width="100" height="100">
					Your browser does not support the canvas element.
				</canvas>
			</div>
		</div>
		<div id="anchor_line_bottom_right">
			<div id="anchor_name">
				<h1 class="anchor_name">
					<span class="anchor_capital">M</span>ATTHEW 
					<span class="anchor_capital">M</span>C<span class="anchor_capital">C</span>ANN
				</h1>
			</div>
		</div>
		<div id="container">
			<div id="header"></div>
			<div id="menu">
				<div class="menu_link" id="home" onMouseOver="growMenuItem('home')"
					onMouseOut="shrinkMenuItem('home')">
					<a href="/" class="menu_link" id="home_link">
						Home
					</a>
				</div>
				<div class="menu_link" id="educations" onMouseOver="growMenuItem('educations')"
					onMouseOut="shrinkMenuItem('educations')">
					<?php
						echo $this->Html->link('Education', array('controller' => 'educations',
																			   'action' => 'index'),
																		array('class' => 'menu_link',
																				'id' => 'educations_link'));
					?>
				</div>
				<div class="menu_link" id="jobs" onMouseOver="growMenuItem('jobs')"
					onMouseOut="shrinkMenuItem('jobs')">
					<?php
						echo $this->Html->link('Work', array('controller' => 'jobs',
																		 'action' => 'index'),
																 array('class' => 'menu_link',
																 		 'id' => 'jobs_link'));
					?>
				</div>
				<div class="menu_link" id="projects" onMouseOver="growMenuItem('projects')"
					onMouseOut="shrinkMenuItem('projects')">
					<?php
						echo $this->html->link('Projects', array('controller' => 'projects',
																			  'action' => 'index'),
																	  array('class' => 'menu_link',
																	  		  'id' => 'projects_link'));
					?>
				</div>
				<div class="menu_link" id="skills" onMouseOver="growMenuItem('skills')"
					onMouseOut="shrinkMenuItem('skills')">
					<?php
						echo $this->Html->link('Skills', array('controller' => 'skills',
																		   'action' => 'index'),
																	array('class' => 'menu_link',
																			'id' => 'skills_link')); 
					?>	
				</div>
				<div class="menu_link" id="recommendations" onMouseOver="growMenuItem('recommendations')"
					onMouseOut="shrinkMenuItem('recommendations')">
					<?php
						echo $this->Html->link('References', array('controller' => 'recommendations',
																				 'action' => 'index'),
																		 array('class' => 'menu_link',
																		 		 'id' => 'recommendations_link'));
					?>
				</div>
				<div class='menu_link' id="contact" onMouseOver="growMenuItem('contact')"
					onMouseOut="shrinkMenuItem('contact')">
					<a href="pages/contact" class="menu_link" id="contact_link">
						Contact
					</a>
				</div>
			</div>
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<div id="footer">
				<?php 
					echo $this->Html->image('cake.power.gif', array('alt' => 'CakePHP'))
				?>
				&nbsp;&nbsp;&nbsp;Developed using CakePHP, a PHP Model-View-Controller package
			</div>
		</div>
	</div>
</body>
</html>
