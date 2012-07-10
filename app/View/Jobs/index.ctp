<!--Loop through each of the jobs-->
<?php foreach($jobs as $job): ?>
	<div class='job'>
		<table class='job'>
			<tr>
				<td class='job' colspan='2'>
					<h1 class='job'>
						<?php echo $this->Html->link($job['Job']['employer']); ?>
					</h1>
				</td>
			</tr>
		</table>
	</div>
<?php endforeach; ?>
