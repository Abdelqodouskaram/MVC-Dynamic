<h3>POST INDEX</h3>

<?php $i = 0;

while ($i < count($data)) { ?>

    <h4>POST Name Is : <?php echo $data[$i]['name'] ?></h4>

    <a href="edit?id=<?php echo $data[$i]['id'] ?>">Edit</a>

    <a href="show?id=<?php echo $data[$i]['id'] ?>">Show</a>

    <br><br>

    <form action="delete?id=<?php echo $data[$i]['id'] ?>" method="POST">

        <input type="submit" value="DELETE" name="id" placeholder="DELETE">

    </form>

    <hr>

<?php $i++; } ?>




<h1>
    <a href="create">CREATE</a>
</h1>