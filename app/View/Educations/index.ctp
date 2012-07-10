<!-- Loop through each of the educations -->
<?php foreach($educations as $education): ?>
	<div class='summary'>
		<table class='education'>
			<tr>
				<td class='education' colspan='2'>
					<h1 class='education'>
						<?php 
							echo $this->Html->link($education['Education']['school_name'],
														  array('controller' => 'educations',
														  		  'action' => 'view'),
														  array('class' => 'education'));
						?>
					</h1>
				</td>
			</tr>
			<tr>
				<td class='education'>
					<h2 class="education">Program</h2>
					<?php echo $education['Education']['degree']; ?>
				</td>
				<td class='education' align='right'>
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
				<td class='education'>
					<h2 class='education'>Focus</h2>
					<?php echo $education['Education']['focus']; ?>
				</td>
				<td class='education' align='right'>
					<h2 class='education'>GPA</h2>
					<?php
						echo $education['Education']['gpa'] . "/";
						echo $education['Education']['max_gpa'];
					?>
				</td>
			</tr>
		</table>
	</div>
<?php endforeach; ?>
