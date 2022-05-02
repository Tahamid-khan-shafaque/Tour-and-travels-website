<?php
session_start();
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];



        $sql="select * from `data` where username='$username' and password='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                //echo "Log in successfull";
                $login=1;
                $_SESSION['username']=$username;
                header('location:welcome.php');
            }else{
                //echo "invalid credentials";
                $invalid=1;
            }
        }
    }
}
?>


<!-- another -->


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
if($login){
    echo "<div class='alert alert-success' role='alert'>
    log in successfull
  </div>";
}else{
    if($invalid){
        echo "<div class='alert alert-danger' role='alert'>
       invalid credentials
      </div>";
    }
}
?>


    </body>
    </html>
