# Todo #

Ce TP est un site en PHP qui permet à partir d'une base de données d'ajouter, modifier, réordonner et supprimer une liste de tâches à faire.

Voici un aperçu du site TODO:
Voici ce que la page nous affiche, ainsi que les informations insérées dans la base de données todo. On aperçoit que toutes les tâches ont été réalisées.

![TODO1.png](https://github.com/TracyDSilva/Todo/blob/master/TODO1.PNG)

On décide alors d'ajouter une nouvelle tâche, l'ID de cette dernière sera automatiquement incrémentée. On lui donne l'ordre 1 et son intitulé est 'Faire mon TP'. Puis on ajoute.

![TODO2.png](https://github.com/TracyDSilva/Todo/blob/master/TODO2.PNG)

Une fois cette nouvelle tâche ajoutée, la page d'accueil s'affiche de nouveau et on peut apercevoir cette nouvelle tâche sous l'ID n°17, elle n'est pas encore faite et est notamment présente dans la base de données.

![TODO3.png](https://github.com/TracyDSilva/Todo/blob/master/TODO3.PNG)

On décide alors de modifier cette tâche, on insère son ID 17, on lui met l'ordre de 5 et son intitulé ne sera donc plus 'Faire mon TP' mais 'Faire mon TP au propre'. On valide...

![TODO4.png](https://github.com/TracyDSilva/Todo/blob/master/TODO4.PNG)

On retombe de nouveau dans la page d'accueil. Toutefois, la modification a bien été prise en compte, car son nom a changé et son ordre également. La modification a notamment été instaurée dans la base de données.

![TODO5.png](https://github.com/TracyDSilva/Todo/blob/master/TODO5.PNG)

On clique sur le lien 'Fait' de la tâche n°17, elle est immédiatement rayée de la liste et dans la base de données est inscrite comme complétée.

![TODO6.png](https://github.com/TracyDSilva/Todo/blob/master/TODO6.PNG)

On décide alors de supprimer cette tâche...

![TODO7.png](https://github.com/TracyDSilva/Todo/blob/master/TODO7.PNG)

La tâche 'Faire mon TP au propre' n'existe plus.

![TODO8.png](https://github.com/TracyDSilva/Todo/blob/master/TODO8.PNG)
