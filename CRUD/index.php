<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adddata.php" method="POST">
       Username <input type = "text" name = "username" /><br><br>
        Contact <input type = "text" name = "number" /><br><br>
        <button>submit</button>
    </form>
    <table border = 1px>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>Action</th>
        </tr>
    <?php
    include('db.php');
    $query = "SELECT * FROM `names`";
    $sql = mysqli_query($con,$query);
    while($row =mysqli_fetch_assoc($sql))
    {
    $id = $row['id'];
    $name = $row['name'];
    $phone = $row['phone'];
    ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $phone; ?></td>
        <td><a href = "delete.php?id=<?php echo $id; ?>">DELETE</a></td>
        <td><a href = "edit.php?id=<?php echo $id; ?>">EDIT</a></td>
    </tr>
    <?php }?>
    </table>
</body>
</html>