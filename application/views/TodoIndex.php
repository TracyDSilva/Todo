<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title><?php echo $title ?></title>
        </head>
        <body>
            <div class="container">
                <h1><?php echo $title ?></h1>
                    <?php foreach($todos as $todo): ?>
                
                <?php
                    $id=$todo['id'];
                    $task=$todo['task'];
                    $ordre=$todo['ordre'];
                    $completed=$todo['completed'];
                    
                    if($completed == 0){
                        $completed = 'A faire';
                        echo $task." ".$id." ".$ordre;
                    }
                    else{
                        echo "<s>".$task." ".$id." ".$ordre."</s>";
                    }
                    
                    if($completed !='Fait'){
                        ?>
                        <a href="<?php echo base_url('todo/fait/'.$todo['id']); ?>">&nbsp;Fait</a>&nbsp;
                    <?php
                    }
                    ?>
                        
                    <br/>    
                    
                    <?php endforeach; ?>
                    
                    <a href="<?php echo base_url('todo/add'); ?>">Ajouter</a>
                    <a href="<?php echo base_url('todo/modifier/'.$todo['id']); ?>">Modifier</a>
                    <a href="<?php echo base_url('todo/supprimer/'.$todo['id']); ?>">Supprimer</a>
                    <a href="<?php echo base_url('todo/reordonner'); ?>">Réordonner</a>
            </div><!--/.container -->
        </body>
    </html>
