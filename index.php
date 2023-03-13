<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="login.css" rel="stylesheet">
        <title>Netizens Live</title>
    </head>

    <body>
        <div  class="block">
        <h1>NETIZENS</h1><br>
        <h3>LOGIN / SIGN IN</h3>

        <br><br>
        <form method="post">
  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"><br>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1"  class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
  
        <button type="submit" name="sb" class="btn btn-primary">Submit</button>
        <br><small id="emailHelp" class="form-text">A place where Ideas grow</small><br>
        </form>

        <?php
        $con=mysqli_connect('localhost:3306','root');
        if(isset($_POST['sb']))
        {
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $query="select * from log where email='$email' and pass='$pass'";
            $result=mysqli_query($con,$query);
            $count=mysqli_num_rows($result);
            if($count>0)
            {
              echo "<a href='home.php'>click to here to proceed</a>";
            }
            else{
              echo "invalid";
            }
        }
        ?>

        <br>New here?<a href="signup.php">Signup</a> 
        </div>
    </body>

    <script src="loginjs.js"></script>

</html>