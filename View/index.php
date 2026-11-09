<?php

require_once 'model/ModelPlayer.php';
require_once 'view/ViewHome.php';
require_once 'controller/ControllerHome.php';

$modelPlayer = new ModelPlayer();
$viewHome = new ViewHome();

$controllerHome = new ControllerHome($modelPlayer, $viewHome);

$controllerHome->registerPlayer();
$controllerHome->displayPlayers();
$controllerHome->render();

?>