<?php

namespace SimpleApi;

class Response{
    public function msg($status, $error = '', $rowsAffected = 0, $results = array()){
        $res = array( "success" => $status, "error" => $error );
        if($status)
            $res['data'] = array( "rowsAffected" => $rowsAffected, "results" => $results );
        echo json_encode($res);
    }
}