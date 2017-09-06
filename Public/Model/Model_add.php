<?php

if($_POST){

    $query = new \Lib\database\bdd();

    $requete = $query->insert('posts', ['titre', 'date', 'auteur', 'article'])
        ->values(':titre', ':date', ':auteur', ':article')
        ->tab([
            'titre' => html_entity_decode($_POST['titre']),
            'date' => html_entity_decode($_POST['date']),
            'auteur' => html_entity_decode($_POST['auteur']),
            'article' => $_POST['etidor']
        ])
        ->send();

}

?>