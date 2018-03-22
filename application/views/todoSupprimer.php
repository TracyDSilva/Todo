<h2>Supprimer une tâche</h2><br>
<?php
    echo validation_errors();
    echo form_open(base_url('todo/supprimer'));
    
    echo form_label('Id :','id');
    echo form_input('id',  set_value('id',""));
  ?>
<br><br>
<?php
echo form_submit('Supprimer','Supprimer');
    echo form_close();
?>