<h1>Projects</h1>
<!--Loop through each project and display it-->
<?php foreach($projects as $project): ?>
	<div>
		<h1>
			<?php echo $this->Html->link($project['Project']['title'],
		   	                           array('controller' => 'projects',
		      	                              'action' => 'view',
		         	                           $project['Project']['id'])); ?>
		</h1>
		<?php
			echo $project['Project']['start_date'].' - ';
			if ($project['Project']['end_date']) {
				echo $project['Project']['end_date'];
			} else {
				echo 'Present';
			}
		?><br />
		<p>
			<?php echo $project['Project']['summary'];  ?>
		</p>	
	</div>
<?php endforeach ?>
