<?php
namespace App\Controllers;

class PostController{
    
    public function index(){

        $post = new \App\Models\PostModel();
        
        $data=$post->getPosts();

              extract(['data' => $data]);

        require_once __DIR__ . "/../Views/Post/index.php";

    }

    public function create()
    {

        require_once __DIR__ . "/../Views/Post/create.php";

        if(isset($_POST['submit']))
        {
            $post = new \App\Models\PostModel();

            $id=$_POST['id'];

            $name=$_POST['name'];

            $topic=$_POST['topic'];

            $post->createPost($name,$id,$topic);

            header("location:../post/index");
        }
        
    }
    
    public function edit()
    {
        
        require_once __DIR__ . "/../Views/Post/edit.php";

        if (isset($_POST['edit'])) 
        {
            $post = new \App\Models\PostModel();

            $id = $_POST['id'];

            $name = $_POST['name'];

            $topic = $_POST['topic'];

            $post->updatePost($id, $name, $topic);

            header("location:../post/index");
        }
        
    }

    public function delete()
    {
        $post = new \App\Models\PostModel();

        $delete=$post->deletePost($_GET['id']);

        header("location:../post/index");
    }
    public function show()
    {

        $post = new \App\Models\PostModel();

        $data = $post->showPost($_GET['id']);

        extract(['data' => $data]);
        
        require_once __DIR__ . "/../Views/Post/show.php";
        
    }
 }
