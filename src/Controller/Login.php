<?php

namespace SimpleApi\Controller;

class Login{
    public $res;
    public $doc = array(
        'GET' => array(),
        'PUT' => array(),
        'POST' => array(),
        'DELETE' => array(),
    );

    public function __construct(){
        // $this->res = new Response();
        // $this->doc['GET']['<funcao>'] = $this->funcao;
        $this->doc['GET']['teste'] = 'teste';
        $this->doc['PUT'][] = 'teste';
        $this->doc['POST'][] = 'teste';
    }

    public function getDoc(){
        return $this->doc;
    }
}

?>