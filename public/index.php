<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiController;
use MVC\Router;

$router = new Router();

  
$router->get('/api/productos',[ApiController::class,'index']);
$router->get('/api/productos?categoria=todas',[ApiController::class,'productosCategoria']);
$router->get('/api/productos?categoria=bebida%20energetica',[ApiController::class,'productosCategoria']);
$router->get('/api/productos?categoria=pisco',[ApiController::class,'productosCategoria']);
$router->get('/api/productos?categoria=bebida',[ApiController::class,'productosCategoria']);
$router->get('/api/productos?categoria=snack',[ApiController::class,'productosCategoria']);
$router->get('/api/productos?categoria=ron',[ApiController::class,'productosCategoria']);
$router->get('/api/productos?categoria=cerveza',[ApiController::class,'productosCategoria']);
$router->get('/api/productos?categoria=vodka',[ApiController::class,'productosCategoria']);
$router->get('/api/categorias',[ApiController::class,'categorias']);


$router->comprobarRutas();