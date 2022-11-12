<?php
namespace Controllers;

use Model\Categoria;
use Model\Producto;
use Model\ProductoCategoria;

class ApiController{

  public static function index(){
    $productos = Producto::all();

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($productos);
  }

  public static function productosCategoria(){
    $category = $_GET["categoria"] ?? '';

    $query  = "SELECT p.id, p.name, p.url_image,p.price,p.discount,c.name AS category FROM product p ";
    $query .= "JOIN category c ON p.category = c.id";
    $query .= " WHERE c.name = '{$category}'";

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