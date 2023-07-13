<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="insert.php" method = "POST">
            <label for="email">Email</label>
            <input type="email" id = "email" name = "email" required ><br><br>
            <label for="password">Password</label>
            <input type="password" id = "password" name = "password" required ><br><br>
            <label for="rpassword">Retype Password</label>
            <input type="password" id = "rpassword" name = "rpassword" required ><br><br>
            <button>Submit</button>
        </form>
    </body>
</html>