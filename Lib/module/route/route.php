<?php
/**
 * Created by PhpStorm.
 * User: dafonseca
 * Date: 26/07/2016
 * Time: 15:19
 */

namespace Lib\module\route;



use Config\Config;

class route

{
    private $fields = [];
    private $closure;
    public function Get()
    {

        $this->fields = func_get_args();

        if (!empty($this->fields)) {

            for ($i = 0; $i < 1; $i++) {
                array_push($GLOBALS['dossier'], $this->fields[0]);
            }

        }


        return $this;
    }

    public function Where()
    {
        $this->fields = func_get_args();

        if (isset($this->fields[0])) {
            $this->closure = $this->fields[0];
            $GLOBALS['closure'] = $this->closure;

            foreach ($GLOBALS['closure'] as $k => $v) {
                $this->$k = $v;
            }

        }
        return $this;
    }

    public function variable()
    {
        $this->fields = func_get_args();

        if (isset($this->fields[0])) {

            $GLOBALS['var'] = $this->fields[0];

            foreach ($GLOBALS['var'] as $k => $v) {
                $this->$k = $v;
            }
        }
        return $this;
    }

    public function __call($nom, $arguments)
    {
        $res = $this->$nom;

        return $res(isset($arguments[0]) ? $arguments[0] : '',
            isset($arguments[1]) ? $arguments[1] : '',
            isset($arguments[2]) ? $arguments[2] : '',
            isset($arguments[3]) ? $arguments[3] : '');
    }

    public function send()
    {
        return $this->include_file();
    }

    public function include_file()
    {

        $this->fields = func_get_args();

        $temp = '';

        if ($_GET['p'] == 'documentation') {

            include_once '../Lib/doc/documentation.php';

        } else {

            if (isset($_GET["p"])) {
                $page = $_GET["p"];
            } else {
                $page = Config::Params('home');
            }

            $chemin = [
                0 => [
                    0 => Config::Params('Model'),
                    1 => "Model_$page.php",
                ],
                1 => [
                    0 => Config::Params('Controller'),
                    1 => "Ctrl_$page.php",
                ],
                2 => [
                    0 => Config::Params('Views'),
                    1 => "View_$page.php",
                ]
            ];

            for ($j = 0; $j < sizeof($chemin); $j++) {

                for ($i = 0; $i < count($GLOBALS['dossier']); $i++) {

                    if (file_exists($chemin[$j][0] . $GLOBALS['dossier'][$i] . "/" . "View_" . $_GET["p"] . ".php")) {
                        $temp = $GLOBALS['dossier'][$i] . "/";
                    }

                }

                $dir = $chemin[$j][0] . $temp;
                $files = scandir($dir, 1);

                $file_root = $chemin[$j][1];
                for ($i = 0; $i < count($files) - 2; $i++) {
                    if (file_exists($dir . $file_root)) {
                        if ($files[$i] == $file_root) {
                            include_once $dir . $files[$i];
                        }
                    } else {
                        if ($dir == $chemin[2][0] . $temp) {
                            include_once '../Lib/module/error/404.php';
                        }
                    }
                }
            }
        }
        return $this;
    }


}