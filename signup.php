<?php

$user=0;
$success=0;
$match=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
     if(isset($_POST['signup'])){
         $username=$_POST['username'];
         $password=$_POST['password'];
         $cpassword=$_POST['cpassword'];

/* $sql = "insert into `data` (username,password,cpassword) values('$username','$password','$cpassword')";

$result=mysqli_query($con,$sql);

if($result){
    echo "data inserted successfully";
}
else {
    die(mysqli_error($con));
} */


$sql = "select * from `data` where username ='$username'";

$result = mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
   // echo $num;
   if($num>0){
       //echo "user already exist";
       $user=1;
   }
   else {



       if($password===$cpassword){

        $sql="insert into `data` (username,password,cpassword) values('$username','$password','$cpassword')";
        $result=mysqli_query($con,$sql);
         
   
       if($result){
           //echo "sign up successfull";
           $success=1;
       }
    }
       else{
        //echo "password didn't match";
        $match=1;
    }


  
}

     }
    


    }
   }
?>

<!-- 
     $sql="insert into `data` (username,password,cpassword) values('$username','$password','$cpassword')";
     $result=mysqli_query($con,$sql);
      

    if($result){
        echo "sign up successfull";
    } 
    
    -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Showing alert</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        
<?php
if($user){
    echo "<div class='alert alert-danger' role='alert'>
    user already exist 
  </div>";
}else{
    if($success){
        echo "<div class='alert alert-success' role='alert'>
        Sign up is successfull
      </div>";
    }else{
        if($match){
            echo "<div class='alert alert-danger' role='alert'>
        Password didn't match
      </div>";
        }
    }
}
?>


    </body>
    </html>

