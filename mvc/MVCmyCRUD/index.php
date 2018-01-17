<?php

function Scan($dir)
{
    if (!preg_match("/\.$/",$dir)){
       if (is_file($dir))  require_once($dir);
        else {
            $d=opendir("$dir");
            while(false !== ($file = readdir($d)))
                Scan("$dir/$file");
            closedir($d);
        }
    }
}


require_once('config.php');

Scan("./classes");
Scan("./controllers");
Scan("./models");


$bootstrap = new Bootstrap;
$controller = $bootstrap->createController();
if($controller) {
  $controller->executeAction();
}
