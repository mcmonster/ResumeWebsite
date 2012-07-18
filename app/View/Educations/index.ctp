<!-- Loop through each of the educations -->
<table class="summary">
<?php
	$index = 0; // Counter used to turn off the trailing dividing line for
					// the last summary item
	foreach($educations as $education):
		$index++;
?>
	<tr>
		<td class="summary" colspan="2">
			<h1 class="summary">
				<?php 
					echo $this->Html->link($education['Education']['school_name'],
												  array('controller' => 'educations',
												  		  'action' => 'view'),
												  array('class' => 'summary'));
				?>
			</h1>
		</td>
	</tr>
	<tr>
		<td class="summary">
			<h2 class="summary">Program</h2>
			<?php echo $education['Education']['degree']; ?>
		</td>
		<td class="summary" align="right">
			<?php
				echo date("M Y", $this->Time->toUnix($education['Education']['start_date']));
				echo ' - ';
				if ($education['Education']['end_date']) {
					echo date("M Y", $this->Time->toUnix($education['Education']['end_date']));
				} else {
					echo 'Present';
				}
			?>
		</td>
	</tr>
	<tr>
		<td class="summary">
			<h2 class="summary">Focus</h2>
			<?php echo $education['Education']['focus']; ?>
		</td>
		<td class="summary" align="right">
			<h2 class="summary">GPA</h2>
			<?php
				echo $education['Education']['gpa'] . "/";
				echo $education['Education']['max_gpa'];
			?>
		</td>
	</tr>
	<?php
		if ($index < count($educations)) {
			echo "<tr class='divider'><td class='divider' colspan='2'></td></tr>";
		}
	?>
<?php endforeach; ?>
</table>
