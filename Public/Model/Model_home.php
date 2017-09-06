<?php

$query = new \Lib\database\bdd();

$requete = $query->select('*')->from('posts')->send();

?>