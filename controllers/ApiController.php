<?php
namespace Controllers;

use Model\Producto;

class ApiController{

  public static function index(){
    $productos = Producto::all();
    
    echo json_encode($productos);
  }
}