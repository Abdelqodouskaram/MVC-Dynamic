<?php
namespace App\Controllers;


use App\Models\UserModel;

class UserController{

    public function index()
    {
        $User = new UserModel();
        $User->name = "AbdElQodous";
        $User->age = 24;
        $User->id = 1;
        require_once __DIR__."/../Views/User/index.php";
        return $User;
    }

    public function create()
    {
        require_once __DIR__ . "/../Views/User/create.php";
    }

    public function edit()
    {
        require_once __DIR__ . "/../Views/User/edit.php";
        
    }

    public function show()
    {
        require_once __DIR__ . "/../Views/User/show.php";
    }
}