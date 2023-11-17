<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sky-High Store</title>
	<link rel="stylesheet" href="register.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST['login']))
        {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM user WHERE email ='$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user)
            {
                if (password_verify($password, $user["password"]))
                {
                    header("location: project.html");
                    die();
                }
                else
                {
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }
            else
            {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <form action="login.php" method="post">

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email: ">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password: ">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="login" value="Login">
            </div>

        </form>
        <div><p>Not sign up yet <a href="registration.php"> Sign Up Here </a></p></div>
    </div>

</body>
</html>