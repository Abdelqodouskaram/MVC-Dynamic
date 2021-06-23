<?php
namespace App\Models;

class PostModel{

    public $name;
    public $id;
    public $topic;

    public function getPosts()
    {

        $conn = new \App\Config\DBconnect();
        $co = $conn->connect();
        $sql = "SELECT `name`,`id` FROM `posts`";
        $result = mysqli_query($co, $sql);
        for ($data = array(); $row = mysqli_fetch_assoc($result); $data[] = $row);
        return $data;
        
    }
    
    public function showPost($id)
    {

        $conn = new \App\Config\DBconnect();
        $co = $conn->connect();
        $sql = "SELECT * FROM `posts` WHERE `id` = $id";
        $result = mysqli_query($co, $sql);
        $data = mysqli_fetch_assoc($result);
        return $data;

    }
    public function deletePost($id)
    {

        $conn = new \App\Config\DBconnect();
        $co = $conn->connect();
        $sql = "DELETE FROM `posts` WHERE `id` = $id";
        $result = mysqli_query($co, $sql);

    }

    public function createPost($name,$id,$topic)
    {

        $conn = new \App\Config\DBconnect();
        $co = $conn->connect();
        $sql = "INSERT INTO `posts` (`name`,`id`,`topic`) VALUES ('$name','$id','$topic')";
        $result = mysqli_query($co, $sql);
    }

    public function updatePost($id, $name, $topic)
    {

        $conn = new \App\Config\DBconnect();
        $co = $conn->connect();
        $sql = "UPDATE `posts` SET `name`='$name',`topic`='$topic' WHERE `id`='$id' ";
        $result = mysqli_query($co, $sql);
        
    }

}
