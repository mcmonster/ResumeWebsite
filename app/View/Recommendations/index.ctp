<!--Loop through each recommendation-->
<table class="summary">
<?php 
	$index = 0; // Counter used for turning off the trailing horizontal line after
					// the last summary
	foreach($recommendations as $recommendation):
		$index++; 
?>
	<tr>
		<td class="summary" colspan="2">
			<h1 class="summary">
				<?php echo $recommendation['Recommendation']['name']; ?>
			</h1>
			<?php
				echo $recommendation['Recommendation']['relation'] . ", ";
				echo $this->Html->link($recommendation['Job']['employer'],
					array('controller' => 'jobs',
							'action' => 'view'),
					array('class' => 'summary'));
			?>
		</td>
	</tr>
	<tr>
		<td class="summary">
			<h2 class="summary">
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
		<td class="summary" align="right">
			<h2 class="summary">Phone</h2>
			<?php echo $recommendation['Recommendation']['phone']; ?>
		</td>
	</tr>
	<tr>
		<td class="summary">
			<h2 class="summary">E-mail</h2>
			<?php echo $recommendation['Recommendation']['email']; ?>
		</td>
		<td class="summary" align="right">
			<?php 
				echo $this->Html->link('Download PDF', 
					array('controller' => 'recommendations',
							'action' => 'download',
							$recommendation['Recommendation']['file']),
					array('class' => 'summary'));
			?>
		</td>
	</tr>
	<tr>
		<td class="summary" colspan="2">
			<h2 class="summary">Excerpt</h2>
			<i>
				...<?php echo $recommendation['Recommendation']['summary'] ?>...
			</i>
		</td>
	</tr>
	<?php
		if ($index < count($recommendations)) {
			echo "<tr class='divider'><td class='divider' colspan='2'></td></tr>";
		}
	?>
<?php endforeach; ?>
</table>
