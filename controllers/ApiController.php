<?php
namespace Controllers;

use Model\Categoria;
use Model\ProductoCategoria;

class ApiController{

  public static function index(){
    $category = $_GET["categoria"] ?? '';

    $query  = "SELECT p.id, p.name, p.url_image,p.price,p.discount,c.name AS category FROM product p ";
    $query .= "JOIN category c ON p.category = c.id";
    if ($category) {
      $query .= " WHERE c.name = '{$category}'";
    }

    $productosPorCategoria = ProductoCategoria::SQL($query);

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($productosPorCategoria);
  }

  public static function categorias(){
    $categories = Categoria::all();

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($categories);
  }

}