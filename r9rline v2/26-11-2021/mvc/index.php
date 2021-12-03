<?php
if(!isset($_SESSION)) session_start();
//var_dump($_GET['p']);
if(isset($_GET['p'])&&$_GET['p']!=''){
$param=explode('/', $_GET['p']);
$controller=ucfirst($param[0]);
$action=isset($param[1]) ? $param[1] : 'index';
$id=isset($param[2]) ? $param[2] : null;
//var_dump($controller);
//var_dump($action);
//var_dump($id);
///echo "uuu";

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','', $_SERVER['SCRIPT_FILENAME']));

//var_dump(WEBROOT);
//var_dump(ROOT);
///$test = ROOT.'controller/'.$controller.'.php';
///var_dump($test);
///include '/var/www/2022-r9r-line/controller/Accueil.php';
include ROOT.'controller/'.$controller.'.php';
$controllerspec=new $controller();
// $controllerspec=new Accueil();
//var_dump($controllerspec);
///echo "yes";
//On appelle l'action donnée en URL

if(method_exists($controllerspec,$action)){
    $controllerspec->$action($id);
    }else{
    echo "erreur";
    }
}


?>