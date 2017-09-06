<?php

require "../vendor/autoload.php";

$file = file_exists('../install/install.php');
if ($file) {
    include_once '../install/install.php';
} else {

    include_once Config\Config::Params('template');

}
