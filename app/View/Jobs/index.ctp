<!--Loop through each of the jobs-->
<?php foreach($jobs as $job): ?>
	<div class='summary'>
		<table class='job'>
			<tr>
				<td class='job' colspan='2'>
					<h1 class='job'>
						<?php echo $this->Html->link($job['Job']['employer'],
															  array('controller' => 'jobs',
															  		  'action' => 'view'),
															  array('class' => 'job')); ?>
					</h1>
				</td>
			</tr>
			<tr>
				<td class='job'>
					<?php echo $job['Job']['location']; ?>
				</td>
				<td class='job' align='right'>
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
				<td class='job'>
					<h2 class='job'>Title</h2>
					<?php echo $job['Job']['title']; ?>
				</td>
				<td class='job' align='right'>
					<h2 class='job'>Supervisor</h2>
					<?php echo $this->Html->link($job['Recommendation']['name'],
														  array('controller' => 'recommendations',
														  		  'action' => 'view',
														  		  $job['Recommendation']['id']),
														  array('class' => 'job')); ?>
				</td>
			</tr>
			<tr>
				<td class='job' colspan='2'>
					<h2 class='job'>Summary</h2>
					<ul class='job'>
						<?php
							echo $job['Job']['summary'];
						?>
					</ul>
				</td>
			</tr>
		</table>
	</div>
<?php endforeach; ?>
