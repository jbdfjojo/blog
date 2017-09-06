<?php

$query2 = new \Lib\database\bdd();

$post = $query2->select('*')->from('posts')->send();

for ($i = 0 ; $i < sizeof($post); $i++){

    if ($post[$i]['id'] == $_GET['id']){
        $titre = $post[$i]['titre'];
        $date = $post[$i]['date'];
        $auteur = $post[$i]['auteur'];
        $article = $post[$i]['article'];
    }
}

if($_POST){

    $query = new \Lib\database\bdd();

    $requete = $query->update('posts')->set('titre = :titre', 'date = :date', 'auteur = :auteur', 'article = :article')
        ->where('id = :id')
        ->tab([
            'titre' => html_entity_decode($_POST['titre']),
            'date' => html_entity_decode($_POST['date']),
            'auteur' => html_entity_decode($_POST['auteur']),
            'article' => $_POST['etidor'],
            'id' => $_GET['id']]
        )
        ->send();

}

?>