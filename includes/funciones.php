<?php

function debuguear($variable) : string {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  exit;
}
function includeHeaders() : void {
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");
}


