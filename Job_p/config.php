<?php 
//connection of database
$server="localhost";
$username="root";
$password="";
$database="jobs";
$error='';
$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    echo "Connection Error".$conn->connect_error;
}
//register process

if(isset($_POST['register'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users`(`email`, `name`, `number`, `password`) VALUES ('$email','$name','$number','$password')";
    if(mysqli_query($conn,$sql)){
        //echo "Successfully Stored";
    }
    else{
        echo "ERROR: not inserted $sql".mysqli_error($conn);
    }
}

//Login
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql= "SELECT * FROM users WHERE email = '$email' and  password = '$password'";
    $result=mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:admin.php");
    }
    else{
        $error='email id or password is incorrect';
    }
}
//posting jobs
if(isset($_POST['jobs'])){
    $cname=$_POST['cname'];
    $job_position=$_POST['job_position'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO `jobs`(`cname`, `job_position`, `skills`, `CTC`) VALUES ('$cname','$job_position','$skills','$CTC')";
    if(mysqli_query($conn,$sql)){
        //echo "New Job Posted";
    }
    else{
        echo "ERROR: Failed to Post the Job $sql.".mysqli_error($conn);
    }
}
//Apply job
if(isset($_POST['apply'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $position=$_POST['position'];
    $cname=$_POST['cname'];
    $edu=$_POST['edu'];
    $skills=$_POST['skills'];
    
    $sql= "INSERT INTO `candidates`(`email`,`name`,`position`,`cname`,`education`,`skills`) VALUES ('$email','$name','$position','$cname','$edu','$skills')";

    if(mysqli_query($conn,$sql)){

    }
    else{
        echo "ERROR: Failed to Post the Job $sql.".mysqli_error($conn);
    }
}


//mysqli_close($conn);
?>