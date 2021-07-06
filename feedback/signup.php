<?php include('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-form">
        <form>
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <?php 
                if(isset($_SESSION['signup']))
                {
                    echo $_SESSION['signup'];
                    unset($_SESSION['signup']);
                }
                if(isset($_SESSION['val']))
                {
                    echo $_SESSION['val'];
                    unset($_SESSION['val']);
                }
                
            ?> 
            <div class="form-group">
                <input type="text" class="form-control item" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="email" placeholder="Email">
            </div>            
            <div class="form-group">
                <input type="date" class="form-control item" name="date" placeholder="Birth Date">
            </div>            
            <div class="form-group">
                <input type="submit" name="submit" value="Create Account" class="btn btn-block create-account">
            </div>
            
        </form>        
    </div>   
</body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_GET['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = $_GET['username'];                        
        $password = $_GET['password'];
        $email=$_GET['email'];
        $date=$_GET['date'];    
        if(strlen($username)<3)
            $_SESSION['val']="<div class='text-danger'>enter valid username</div>";
        else if(strlen($password)<4)
            $_SESSION['val']="<div class='text-danger'>enter valid password</div>";
        else if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
            $_SESSION['val']="<div class='text-danger'>enter valid email id</div>";
        else if(empty($date))
            $_SESSION['val']="<div class='text-danger'>enter your date of birth</div>";        
        else{
            $username = mysqli_real_escape_string($conn, $username);
            $password = password_hash(mysqli_real_escape_string($conn, $_GET['password']),PASSWORD_BCRYPT,array('cost'=>12));

            $sql="select * from account where username='$username'";
            $res=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
            if(count>=1){
                $_SESSION['val']="<div class='text-danger text-center'>Already exist username</div>";
                header('location:'.SITEURL.'signup.php');
            }
            $sql="select * from account where email='$email'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);            
            if($count==0){
                $row="insert into account(username,password,email,dob) values('$username','$password','$email','$date')";
                $res=mysqli_query($conn, $row);
                if($res){                   
                    header('location:'.SITEURL.'login.php');
                }
                else{                                        
                    $_SESSION['signup']="<div class='text-danger'>Enter valid Data</div>";
                    header('location:'.SITEURL.'signup.php');
                }
            }
            else{                                    
                $_SESSION['signup']="<div class='text-danger text-center'>Already exist account</div>";
                header('location:'.SITEURL.'signup.php');
            }
        }
    }

?>