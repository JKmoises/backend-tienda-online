<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiController;
use MVC\Router;

$router = new Router();


$router->get('/productos',[ApiController::class,'index']);


$router->comprobarRutas();