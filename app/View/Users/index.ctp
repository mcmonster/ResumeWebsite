<h1>Users</h1>
<?php echo $this->Html->link('Add User', array(
	'controller' => 'users',
	'action' => 'add')); ?>

<table>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Actions</th>
		<th>Created</th>
	</tr>

	<!--Loop through the users-->
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td>
			<?php 
			echo $this->Html->link($user['User']['username'],
				array('controller' => 'users',
						'action' => 'view',
						$user['User']['id'])); 
			?>
		</td>
		<td>
			<?php
			echo $this->Html->link('Edit', array('action' => 'edit',
															 $user['User']['id']));
			echo '&nbsp;';
			echo $this->Form->postLink('Delete', 
												array('action' => 'delete',
														$user['User']['id']),
												array('confirm' => 'Are you sure?'));
			?>
		</td>
		<td><?php echo $user['User']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
	
