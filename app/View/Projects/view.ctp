<h1><?php echo h($project['Project']['title']); ?></h1>
<p>
	<small>
		Start Date: <?php echo $project['Project']['start_date'] ?>
	</small>
</p>
<p>
	<small>
		End Date: <?php echo $project['Project']['end_date'] ?>
	</small>
</p>
<p>
	<?php echo h($project['Project']['body']);  ?>
</p>
