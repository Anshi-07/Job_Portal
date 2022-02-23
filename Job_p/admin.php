<?php include 'config.php'?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Panel</title>
    <style>
      .sidebar{
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 10;
        left: 0;
        background-color:pink;
        overflow-x: hidden;
        padding-top: 20px;
       
      }
      .sidebar a{
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        color: blue;
        display: block;
      }
      .main{
        margin-left: 160px;
        font-size: 18px;
        padding: 0px 10px;

      }
      @media screen and (max-height: 450px) {
        .sidebar {padding-top: 15px;}
        .sidebar a { font-size: 18px;}
      }
    </style>
  </head>
  
  <body>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="data:image/png;base64,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" alt="" width="30" height="24" class="d-inline-block align-text-top">
      
    </a>
  </div>
  </nav>
  <div class="sidebar">
    
  <a href="index.php">Apply For Jobs</a>
    <hr>
    <a href="admin.php">Post Jobs</a>
    <hr>
    <a href="candidates.php">Applied Candidates</a>
    <hr>
    
  </div>

  <div class="main">
  <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company Name" name="cname" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Job Position</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Job Position" name="job_position">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Skills Required</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skills Required" name="skills">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">CTC</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CTC" name="CTC">
  </div><br>
  <button type="submit" class="btn btn-primary" name="jobs">Submit</button><br><br>
</form>

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Job Position</th>
      <th scope="col">Skills Required</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "Select * from jobs";
    $result = mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
        <tr>
        <th scope="row">'.++$i.'</th>
        <td>'.$rows['cname'].'</td>
        <td>'.$rows['job_position'].'</td>
        <td>'.$rows['skills'].'</td>
        <td>'.$rows['CTC'].'</td>
      </tr>';}}
    else{
      echo "";
    }
    ?>
  </tbody>
</table>
  </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>