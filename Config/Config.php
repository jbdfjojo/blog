<?php
/**
 * Created by PhpStorm.
 * User: dafonseca
 * Date: 28/10/2016
 * Time: 18:57
 */

namespace Config;


class Config
{

    public static function Params($name){

        $param = [
            /* base de donnée */
            'host'     => '127.0.0.1',
            'dbName'   => 'blog',
            'user'     => 'jojo',
            'pass'     => 'jojo',

            /* configuration general */

            'title'    => 'blog',
            'css'      => '../App/Css/style.css',
            'js'       => '../App/Js/app.js',
            'img'      => '../App/img/',
            'template' => '../template/default.php',

            /* route */

            'Views'      => '../Public/Views/',
            'Controller'      => '../Public/Controller/',
            'Model'      => '../Public/Model/',
            'home'     => 'home', // page d'acceuil par default


        ];

        return $param[$name];
    }
}