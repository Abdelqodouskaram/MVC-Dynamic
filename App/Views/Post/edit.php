<form action="edit" method="POST">
    <input type="text" value="<?php echo $_GET['id'] ?>" name="id" placeholder="ID" hidden> <br><br>
    <input type="text" name="name" placeholder="Name"> <br><br>
    <input type="text" name="topic" placeholder="Topic"> <br><br>
    <input type="submit" value="Update" name="edit">
</form>