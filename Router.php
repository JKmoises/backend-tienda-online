<?php

namespace MVC;

class Router{
  public array $getRoutes = [];
  public array $postRoutes = [];

  public function get($url, $fn)
  {
    $this->getRoutes[$url] = $fn;
  }

  public function post($url, $fn)
  {
    $this->postRoutes[$url] = $fn;
  }

  public function comprobarRutas(){
    $url_actual = $_SERVER['PATH_INFO'];
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'GET') {
      $fn = $this->getRoutes[$url_actual] ?? null;
    } else {
      $fn = $this->postRoutes[$url_actual] ?? null;
    }

    if ($fn) {
      call_user_func($fn, $this);
    } else {
      echo "Página No Encontrada o Ruta no válida";
    }
  }
}
