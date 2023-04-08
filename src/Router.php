<?php

namespace SimpleApi;

class Router{
    public $res;

    public function __construct(){
        $this->res = new Response();
    }

    public function handler(){
        $rotaValidada['status'] = false;
        $rotaValidada['error'] = false;
        $rota = $this->prepareRoute();
        $method = $this->getMethod();
        echo PHP_EOL;
        echo json_encode($rota);
        echo PHP_EOL;
        echo PHP_EOL;
        // var_dump($_SERVER);
        $controller = false;
        switch ($rota[0]) {
            case 'login':
                $controller = new \SimpleApi\Controller\Login();
            break;
            default:
                echo 'Rota padrão ' . PHP_EOL;
            break;
        }

        if($controller){
            var_dump( $controller );
        }

        return $rotaValidada;
    }

    public function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public function prepareRoute(){
        $aux = explode('/', $_SERVER['REDIRECT_URL']);
        array_shift($aux);
        return $aux;
    }
}
