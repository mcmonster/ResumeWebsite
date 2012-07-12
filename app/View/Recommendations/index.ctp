<!--Loop through each recommendation-->
<?php foreach($recommendations as $recommendation): ?>
	<div class="summary">
		<table class="recommend">
			<tr>
				<td class="recommend" colspan="2">
					<h1 class="recommend">
						<?php echo $recommendation['Recommendation']['name']; ?>
					</h1>
					<?php
						echo $recommendation['Recommendation']['relation'] . ", ";
						echo $this->Html->link($recommendation['Job']['employer'],
							array('controller' => 'jobs',
									'action' => 'view'),
							array('class' => 'recommend'));
					?>
				</td>
			</tr>
			<tr>
				<td>
					<h2 class="recommend">
						Mailing Address
					</h2>
					<?php
						echo $recommendation['Recommendation']['street'];
						echo '<br />';
						echo $recommendation['Recommendation']['city'] . ', ' .
							  $recommendation['Recommendation']['state'] . ' ' .
							  $recommendation['Recommendation']['zipcode'];
					?>
				</td>
				<td class="recommend" align="right">
					<h2 class="recommend">Phone</h2>
					<?php echo $recommendation['Recommendation']['phone']; ?>
				</td>
			</tr>
			<tr>
				<td class="recommend">
					<h2 class="recommend">E-mail</h2>
					<?php echo $recommendation['Recommendation']['email']; ?>
				</td>
				<td class="recommend" align="right">
					<?php 
						echo $this->Html->link('Download PDF', 
							array('controller' => 'recommendations',
									'action' => 'download',
									$recommendation['Recommendation']['file']),
							array('class' => 'recommend'));
					?>
				</td>
			</tr>
		</table>
	</div>
<?php endforeach; ?>
