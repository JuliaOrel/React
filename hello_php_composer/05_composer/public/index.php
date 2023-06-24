<?php
use Controllers\HomeController;

require_once ("../vendor/autoload.php");
var_dump($_GET);

$c = null;

switch ($_GET['controller']) {
    case 'home':
        $c = new HomeController();
        break;
    default:
        $c = new HomeController();
}

switch ($_GET['method']) {
    case 'showHome':
        $c->showHome();
        break;
    case 'showAbout':
        $c->showAbout();
        break;
    default:
        $c->showHome();
}
