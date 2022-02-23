<?php include 'config.php'?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>registration</title>
    <style>
        body{
            background-image: url('backgroundimage.jpg');
            background-size: cover;
        }
        form{
            background-color: white;
            margin-left: 490px;
            margin-right: 390px;
            margin-top: 40px;
            padding: 10px;
            box-shadow: 1px 2px #eee;
            border: 2px solid #eee;
        }
    </style>
  </head>
  
  <body>
    <form action="index.php" method="POST"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber1" class="form-label">phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber1" name="number">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <!---<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> --->
  <button type="submit" class="btn btn-primary" formaction="index.php" name="register">Submit</button><br><br>
  

  <a href="login.php" style="text-decoration: none; color: blue">Already Have an Account?</a>
</form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>