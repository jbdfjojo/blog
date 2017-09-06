
<?php

use Lib\module\formulaire\Formulaire;

    Formulaire::form_open('ajouter');

    Formulaire::input( 'titre' , 'titre', 'champs titre vide !!' );
    Formulaire::datepicker('date', 'date', 'champs date vide !!');
    Formulaire::input( 'auteur' , 'auteur', 'champs auteur vide !!' );
    Formulaire::editor('article', 'etidor', 'vous n\'avais rien mis dans l\'etideur');

    Formulaire::form_close();

?>