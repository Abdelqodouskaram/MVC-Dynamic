<?php
namespace App\Libs;

class Router{

    public function routing(){
        
        $directory = [];
        
        foreach (new \DirectoryIterator('../app/views') as $directoryInfo) {

            array_push($directory, $directoryInfo->getFilename());

        }

        $serverPath = str_replace('/public/', '', $_SERVER['PATH_INFO']);

        $arrayPath=explode('/',$serverPath);

        $folder=ucfirst($arrayPath[0]);

        $file=lcfirst($arrayPath[1]);

        $path = [];
        
        if (in_array($folder,$directory)) 
        {

            foreach (new \DirectoryIterator('../app/views/' . $folder) as $pathInfo) {

                if ($pathInfo->isDot()) continue;

                array_push($path, trim($pathInfo->getFilename(), '.php'));
            }

            if(!empty($file) && in_array($file,$path)){
                $class = "\\App\\Controllers\\" .$folder. "Controller";
                
                $controll=new $class;

                $controll->$file();
            }
            
            elseif(empty($file)){

            $indexCall = "\\App\\Controllers\\" . $folder . "Controller";

            $indexCont = new $indexCall;

            $indexCont->index();
            } else {

                $notObj = new \App\Controllers\NotController();
                $notObj->error();
            }
            
        }
        else{
            
            $notObj=new \App\Controllers\NotController();
            $notObj->error();

        }
    }
}