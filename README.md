# life-game
To launch the game : php game.php

you can modify the scenarios in game.php
ex : new Life(10) initialize a 2D World with 10*10 random cells (alive or dead)

Pour afficher ce programme sur une page web : 

- on pourrait mettre en base le tableau de cellules :
par exemple créer une table nommée cell avec des champs isAlive (0 ou 1), positionX, positionY, generation (numéro de la génération), killed (si la génération a disparu), killed_date
Ainsi on peut garder un historique sur les générations précédentes.

- créer une fonction pour requêter en base les cellules de la génération courante (requête à faire dans un Service)

- créer une route dans un fichier de config, cette route appelant une méthode d'un Controller

- dans cette méthode du Controller on appelerait la fonction du service récupérant les cellules de la génération courante. On rentrerait ces données dans l'objet Life pour ensuite l'envoyer au niveau d'un template (front).

- on utilise l'objet Life au niveau du template en l'affichant de la manière voulue (on pourrait utiliser ici une méthode comme getSchemaWorldCells() pour faire simple), sinon on pourrait combiner du html, du javascript et du css pour boucler sur l'objet Life afin de faire un rendu graphique (par cellule) plus esthétique.

- on pourrait ensuite introduire un bouton afin d'appeler la méthode moveToNextGeneration() ou bien introduire un timeout qui génère la nouvelle génération toutes les x secondes.
Avec du javascript et/ou css on pourrait faire une transition sur 1 ou 2 secondes pour bien montrer les cellules passées de l'état vivant à mort ou l'inverse.