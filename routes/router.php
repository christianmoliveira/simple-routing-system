<?php 

function load(string $controller, string $action) 
{
  try {
    // verifica se o controller existe
    $controllerNamespace = "app\\controllers\\{$controller}";
  
    if (!class_exists($controllerNamespace)) {
      throw new Exception("O controller {$controller} não existe");
    }
    
    // verifica se o método dentro do controller existe
    $controllerInstance = new $controllerNamespace();
    
    if (!method_exists($controllerInstance, $action)) {
      throw new Exception("O método {$action} não existe no controller {$controller}");
    }
  
    $controllerInstance->$action();
  } catch(\Exception $e) {
    echo $e->getMessage();
  }
}

$routes = [
  'GET' => [
    '/' => fn() => load('HomeController', 'index'),
    '/contact' => fn() => load('ContactController', 'index'),
  ],
  'POST' => [
    '/contact' => fn() => load('ContactController', 'store'),
  ],
];