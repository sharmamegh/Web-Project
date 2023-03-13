<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/google-sans" rel="stylesheet">
    <link href="signup.css" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    <h1>NETIZENS</h1>

    <form method="post">
    <div class="mb-3">
        Fullname <input class="name" name="fullname" required><br><br>
        Date of Birth <input class="dob" name="dob" required><br>

    <!--<div class="mb-3">
        </br>
        <label for="emailInput" class="form-label">Email address</label>
        <input type="text" class="form-control" id="emailInput" name="email" aria-describedby="emailHelp" required><br>
    </div>

    <div class="mb-3">
        </br>
        <label for="passwordInput"  class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="passwordInput" required>
    </div>
  
    <div class="mb-3 form-check">
        </br>
        <input type="checkbox" class="form-check-input" id="checkbox">
        <label class="form-check-label" for="checkbox">Check me out</label>
    </div>-->

    </br>
    <label for="email">Email: </label>
    <input type="text" name="email" placeholder="xyz@domain.com" required>
    
    </br></br>
    <label for="password">Password: </label>
    <input type="password" name="password" placeholder="********" required>

    </br></br>
    <input type="checkbox" name ="checkMe" required>
    <label for="checkMe">Check me out</label>
    
    
    </br></br><button type="submit" name="sb" class="btn btn-primary">Submit</button><br>
    </form>
    </div>

    <?php
    $con=mysqli_connect('localhost:3306','root');
    if(isset($_POST['sb']))
    {
        $name=$_POST['fullname'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $passwd=$_POST['password'];

        $query="INSERT INTO log(fullname,dob,email,passwd) VALUES ('$name','$dob','$email','$passwd')";
        $run=mysqli_query($con,$query);
    
    }
    ?>
    <br><a href="index.php">Login here</a><br><hr>

    <div class="info">
        We hereby assure that credentials here entered by you will be held private and will not be available anywhere over the internet.
    </div>
</body>

</html>