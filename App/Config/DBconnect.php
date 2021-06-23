<?php
namespace App\Config;

use mysqli;

class DBconnect{
    
    public function connect(){

        $conn = new \mysqli('localhost', 'root', '', 'mvc');
        return $conn;

    }    
    

}
