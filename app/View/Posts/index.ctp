<h1>Blog Posts</h1>
<?php echo $this->Html->link('Add Post', 
                             array('controller' => 'posts',
                                   'action' => 'add')); ?>
<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Actions</th>
		<th>Created</th>
	</tr>

	<!--Loop through the $posts-->
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'],
											array('controller' => 'posts',
													'action' => 'view',
													$post['Post']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink(
				                     'Delete',
				                     array('action' => 'delete', $post['Post']['id']),
				                     array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit',
			                                           $post['Post']['id'])); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
