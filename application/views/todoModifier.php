<h2>Modifier d'une tâche</h2><br>
<?php
    echo validation_errors();
    echo form_open(base_url('todo/modifier'));
    
    echo form_label('Id :','id');
    echo form_input('id',  set_value('id',""));
  ?>
<br><br>
<?php
    echo form_label('Ordre :','ordre');
    echo form_input('ordre',  set_value('ordre',""));
?>
<br><br>
<?php
    echo form_label('Tâche :','task');
    echo form_input('task',set_value('task',""));
?>
<br><br>
<?php
echo form_submit('Modifier','Modifier');
    echo form_close();
?>