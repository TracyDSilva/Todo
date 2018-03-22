<h2>Ajouter une tâche</h2><br>
<?php
//si il ya des erreurs, on affiche les messages d'erreurs.
echo validation_errors();

//formulaire de saisie:
echo form_open(base_url('todo/add'));

echo form_label('Ordre :','ordre');
echo form_input('ordre',  set_value('ordre',0));
?>
<br><br>
<?php
echo form_label('Tâche :','task');
echo form_input('task',set_value('task','Saisissez votre tâche'));
?>
<br><br>
<?php
echo form_submit('Ajouter','Ajouter');

echo form_close();
?>

