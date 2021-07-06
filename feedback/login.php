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
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }                               
            ?> 
            <div class="form-group">
                <input type="text" class="form-control item" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" placeholder="Password">
            </div>                        
            <div class="form-group">
                <input type="submit" name="submit" value="Login" class="btn btn-block create-account">
            </div>
            <div>
                <p class="text-center">Don't have an account? <a href="signup.php">Create Account</a></p>
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
        $username = mysqli_real_escape_string($conn, $_GET['username']);
        
       
        $password = mysqli_real_escape_string($conn, $_GET['password']);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM account WHERE username='$username'";
        
        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);
        $row = mysqli_fetch_array($res);      
        if($count>=1)
        {
            //User AVailable and Login Success
            if(password_verify($password,$row['password'])){                                
                $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it
                $admin="Admin";
                if(strcmp($username,$admin)==0){
                    header('location:output.php');
                }
                //REdirect to HOme Page/Dashboard                
                header('location:'.'it3_1.php');
            }
            else{
                $_SESSION['login'] = "<div class='text-danger text-center'>Username or Password did not match.</div>";
                //REdirect to HOme Page/Dashboard
                header('location:'.SITEURL.'login.php');
            }
            
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='text-danger text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'login.php');
        }


    }

?>