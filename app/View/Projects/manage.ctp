<h1>Projects</h1>
<?php echo $this->Html->link('Add Project',
                             array('controller' => 'projects',
                                   'action' => 'add')); ?>
<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Controls</th>
	</tr>

	<!--Loop through the projects-->
	<?php foreach($projects as $project): ?>
	<tr>
		<td><?php echo $project['Project']['id']; ?></td>
		<td><?php echo $this->Html->link($project['Project']['title'],
		                                 array('controller' => 'projects',
		                                       'action' => 'view')); ?></td>
		<td>
			<?php 
			echo $this->Html->link('Edit',
			                       array('action' => 'edit',
			                             $project['Project']['id']));
			echo '&nbsp;'; 
			echo $this->Form->postLink('Delete',
		                              array('action' => 'delete', 
			                           $project['Project']['id']),
		                              array('confirm' => 'Are you sure?')); 
			?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
