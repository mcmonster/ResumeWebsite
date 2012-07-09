<h1>Projects</h1>
<!--Loop through each project and display it-->
<?php foreach($projects as $project): ?>
	<div class='summary'>
		<table>
			<tr>
				<td class="project" colspan="2">
					<h1 class="project">
						<?php 
							echo $this->Html->link(
								$project['Project']['title'],
		   	      		array(
									'controller' => 'projects',
									'action' => 'view',
									$project['Project']['id']),
								array('class' => 'project'));										 
						?>
					</h1>
				</td>
			</tr>
			<tr>
				<td class="project">
					<h2 class="project">Skills</h2>
					<ul class="project">
						<?php
							foreach($project['ProjectSkill'] as $skill):
								if ($skill['isPrimary']) {
									echo "<li class='project'>".$skill['Skill']['name']."</li>";
								}
							endforeach;
						?>
					</ul>
				</td>
				<td class="project" align="right">
					<?php
						echo $this->Time->niceShort($project['Project']['start_date']).' - ';
						if ($project['Project']['end_date']) {
							echo $this->Time->niceShort($project['Project']['end_date']);
						} else {
							echo 'Present';
						}
					?><br />
				</td>
			</tr>
			<tr>
				<td class="project" colspan="2">
					<p>
						<?php echo $project['Project']['summary'];  ?>
					</p>
				</td>
			</tr>
		</table>
	</div>
<?php endforeach ?>
