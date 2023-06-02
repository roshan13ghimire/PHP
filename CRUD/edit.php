<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('db.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM `names` WHERE id = $id";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);


    ?>
    <form action="update.php?id=<?php echo $id;?>" method="POST">
       Username <input type = "text" name = "username" value = "<?php echo $row['name']; ?>" /><br><br>
        Contact <input type = "text" name = "number" value = "<?php echo $row['phone'];?>" /><br><br>
        <button>Update</button>
    </form>
</body>
</html>