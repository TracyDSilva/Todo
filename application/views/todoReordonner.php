<h2>Réordonner mes tâches</h2><br>
<?php
    echo validation_errors();
    echo form_open(base_url('todo/reordonner'));
    
    //echo form_label(set_value('task',$task));
    // form_input('ordre',  set_value('ordre',$ordre));
  ?>
<br><br>
<?php foreach($todos as $todo): ?>
                
                <?php
                    $task=$todo['task'];
                    $ordre=$todo['ordre'];

                   echo form_input('ordre',  set_value('ordre',$ordre*10));
                   echo $task;
                    
                    
?>
</br>
</br>
                    <?php endforeach; ?>
</br>

<?php
    echo form_submit('Réordonner','Réordonner');
    echo form_close();
?>