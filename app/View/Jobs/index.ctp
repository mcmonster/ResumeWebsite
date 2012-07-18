<!--Loop through each of the jobs-->
<table class="summary">
<?php
	$index = 0;
	foreach($jobs as $job): 
		$index++;
?>
	<tr>
		<td class='summary' colspan='2'>
			<h1 class='summary'>
				<?php echo $this->Html->link($job['Job']['employer'],
													  array('controller' => 'jobs',
													  		  'action' => 'view'),
													  array('class' => 'summary')); ?>
			</h1>
		</td>
	</tr>
	<tr>
		<td class='summary'>
			<?php echo $job['Job']['location']; ?>
		</td>
		<td class='summary' align='right'>
			<?php
				echo date("M Y", $this->Time->toUnix($job['Job']['start_date']));
				echo ' - ';
				if ($job['Job']['end_date']) {
					echo date("M Y", $this->Time->toUnix($job['Job']['end_date']));
				} else {
					echo 'Present';
				}
			?>
		</td>
	</tr>
	<tr>
		<td class='summary'>
			<h2 class='summary'>Title</h2>
			<?php echo $job['Job']['title']; ?>
		</td>
		<td class='summary' align='right'>
			<h2 class='summary'>Supervisor</h2>
			<?php echo $this->Html->link($job['Recommendation']['name'],
												  array('controller' => 'recommendations',
												  		  'action' => 'view',
												  		  $job['Recommendation']['id']),
												  array('class' => 'summary')); ?>
		</td>
	</tr>
	<tr>
		<td class='summary' colspan='2'>
			<h2 class='summary'>Summary</h2>
			<ul class='summary'>
				<?php echo $job['Job']['summary'];?>
			</ul>
		</td>
	</tr>
	<?php
		if ($index < count($jobs)) {
			echo "<tr><td class='divider' colspan='2'></td></tr>";
		}
	?>
<?php endforeach; ?>
</table>
