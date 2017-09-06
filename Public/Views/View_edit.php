
<?php

use Lib\module\formulaire\Formulaire;

    Formulaire::form_open('edit');

    Formulaire::input( 'titre' , 'titre', 'champs titre vide !!', 'text', $titre);
    Formulaire::datepicker('date', 'date', 'champs date vide !!', $date);
    Formulaire::input( 'auteur' , 'auteur', 'champs auteur vide !!','text', $auteur );
    Formulaire::editor('article', 'etidor', 'vous n\'avais rien mis dans l\'etideur', $article);

    Formulaire::form_close();

?>