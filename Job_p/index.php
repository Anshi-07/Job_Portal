<?php include 'config.php'?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Career Page</title>

    <style>
     
      .sidebar{
        height: 100%;
        width: 190px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: black;
        overflow-x: hidden;
        padding-top: 20px;
       
      }
      .sidebar a{
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size : 21px;
        color: white;
        display: block;
      }
      .main{
        margin-left: 160px;
        display : block;
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

  
  <div class="sidebar">
    
    <a href="index.php">Available Jobs</a>
    <hr>
    <a href="admin.php">Post Jobs</a>
    <hr>
    <a href="candidates.php">Applied Candidates</a>
    <hr>
    
  </div>


  <div class="modal fade" id="job" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="Fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="Fullname" name="name">
        </div>
        <div class="mb-3">
            <label for="Fullname" class="form-label">Position</label>
            <input type="text" class="form-control" id="Fullname" name="position"> 
        </div>
        <div class="mb-3">
            <label for="Fullname" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="Fullname" name="cname">
        </div>
        <div class="mb-3">
            <label for="EducationQualification" class="form-label">Education Qualification</label>
            <input type="text" class="form-control" id="EducationQualification" name="edu">
        </div>
        <div class="mb-3">
            <label for="Skills" class="form-label">Skills</label>
            <input type="text" class="form-control" id="Skills" name="skills">
        </div>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="apply">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <div class="row m-0" style="margin-bottom : 10px;">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid" style="background-image: url('bimage.jpg');">
                <div class="container" style="color: 	cyan ;padding:90px; margin-right : 20px;">
                    <h1> Welcome To The Job_Portal Website</h1>
                    <h6> Available Jobs on the Portal</h6>
                </div>
            </div> 
        </div>
    </div>

    <div class="row m-0">
      <?php
      $sql = "Select * from jobs";
      $result = mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
        <div class="col-md-4">
            <div style="background-color: #fff ; box-shadow:10px 10px #eee;border: 1px solid; margin: 20px ; padding : 30px ; width: 330px; height: 340px; margin-left : 220px; ">
                <h1 style="text-align: center;">'.$rows['job_position'].'</h1>
                <p style="text-align: center;">'.$rows['cname'].'</p>
                <p><b>Skills Required:</b> '.$rows['skills'].'</p>
                <p><b>CTC: </b>'.$rows['CTC'].'</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#job">Apply For Job</button>
            </div>
        </div>`';}} 
        else{
          echo'';
        }
        ?>
    </div> 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>