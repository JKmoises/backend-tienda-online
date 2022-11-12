<?php
namespace Controllers;

use Model\Categoria;
use Model\Producto;
use Model\ProductoCategoria;

class ApiController{

  public static function index(){
    includeHeaders();

    $productos = Producto::all();

    echo json_encode($productos);
  }

  public static function productosCategoria(){
    includeHeaders();

    $category = $_GET["categoria"] ?? '';
    $productos = Producto::all();

    if ($category === "todas") {
      echo json_encode($productos);
      exit;
    }

    
    $query  = "SELECT p.id, p.name, p.url_image,p.price,p.discount,c.name AS category FROM product p ";
    $query .= "JOIN category c ON p.category = c.id";
    $query .= " WHERE c.name = '{$category}'";
    
    $productosPorCategoria = ProductoCategoria::SQL($query);
    
    echo json_encode($productosPorCategoria);
  }

  public static function categorias(){
    includeHeaders();

    $categories = Categoria::all();

    echo json_encode($categories);
  }

}