<h1>Add Project</h1>
<?php
echo $this->Form->create('Project');
echo $this->Form->input('title');
echo $this->Form->input('start_date');
echo $this->Form->input('end_date');
echo $this->Form->input('summary', array('rows' => '3'));
echo $this->Form->end('Save Project');
?>
