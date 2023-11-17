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
     if (isset($_POST['name']))
     {
        require "process1.php";
        if ($result == "")
        {
            echo "<div class='alert alert-success'>ORDER RECEIVED</div>";
        }
        else
        {
            echo "<div>$result</div>";
        }
     }
     ?>   
    <form  method="post" target="_self">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name: ">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email: ">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" name="qty" placeholder="Quantity: ">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address: " >
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="submit" value="Proceed Check Out">
            </div>

            <br><br>

            

        </form>
    </div>

</body>
</html>