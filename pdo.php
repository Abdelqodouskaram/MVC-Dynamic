<?php
$conn = new mysqli('localhost', 'root', '', 'mvc');
$sql = "SELECT * FROM `posts`";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

