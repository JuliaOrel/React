<?php
use user\Controllers\HomeController;

require_once ("../vendor/autoload.php");


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
