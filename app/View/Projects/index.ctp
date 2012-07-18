<!--Loop through each project and display it-->
<table class="summary">
<?php 
	$index = 0; // Counter used for turning off the trailing horizontal line after
					// the last summary
	foreach($projects as $project): 
		$index++;
?>
	<tr>
		<td class="summary" colspan="2">
			<h1 class="summary">
			<?php 
				echo $this->Html->link($project['Project']['title'],
		      	array('controller' => 'projects',
							'action' => 'view',
							$project['Project']['id']),
					array('class' => 'summary'));										 
			?>
			</h1>
		</td>
	</tr>
	<tr>
		<td class="summary">
			<h2 class="summary">Skills</h2>
			<ul class="summary">
				<?php
					foreach($project['ProjectSkill'] as $skill):
						if ($skill['isPrimary']) {
							echo "<li class='summary'>".$skill['Skill']['name']."</li>";
						}
					endforeach;
				?>
			</ul>
		</td>
		<td class="summary" align="right">
			<?php
				echo date("M Y", $this->Time->toUnix($project['Project']['start_date']));
				echo ' - ';
				if ($project['Project']['end_date']) {
					echo date("M Y", $this->Time->toUnix($project['Project']['end_date']));
				} else {
					echo 'Present';
				}
			?>
		</td>
	</tr>
	<tr>
		<td class="summary" colspan="2">
			<h2 class="summary">Summary</h2>
			<p class="summary">
				<?php echo $project['Project']['summary'];  ?>
			</p>
		</td>
	</tr>
	<?php
		if ($index < count($projects)) {
			echo "<tr class='divider'><td class='divider' colspan='2'></td></tr>";
		}
	?>
<?php endforeach ?>
</table>
