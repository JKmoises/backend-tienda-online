<?php 
namespace Model;

class Producto extends ActiveRecord{
  protected static $tabla = 'product';
  protected static $columnasDB = [
    'id',
    'name',
    'url_image',
    'price',
    'discount',
    'category'
  ];

  public $id;
  public $name;
  public $url_image;
  public $price;
  public $discount;
  public $category;

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->url_image = $args['url_image'] ?? '';
    $this->price = $args['price'] ?? '';
    $this->discount = $args['discount'] ?? '';
    $this->category = $args['category'] ?? '';
  }




}