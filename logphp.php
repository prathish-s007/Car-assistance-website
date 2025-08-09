<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
        $alert="<script> alert('Please SignUp before LogIn!!'); </script>";
        if($_SERVER["REQUEST_METHOD"]=="POST"){

        include 'server.php';
    if($con){
        // echo "Connnection successful";
    
        

        $username = $_REQUEST['username'];
        $pswd=$_REQUEST['pswd'];

        $sql="SELECT * FROM signup WHERE fname='$username' AND pswd='$pswd'";

        $logged=0;
        $invalid=0;

        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num==1){
                $logged=1;
                
               
                  
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Congrats</strong> You are successfully Logged In.
                  <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                  </div>';
                    
                }
            
                
            else{
                $invalid=1;
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error  </strong>    Sign Up First!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            
            }
            

        }
        }
    else{
        die(($con));
    }
    }


        

    ?>
  <div class="d-flex flex-row justify-content-end" style="background-image: url('login page.jpg');background-size:cover; height:100vh; align-items:center;padding-right:280px">
    
    <div class="login-box">
      <h2>Login</h2>
      <form action="logphp.php" method="post">
        <div class="input-group">
          
          <input type="text" name = "username" placeholder="Username" required />
        </div>
        <div class="input-group">
          
          <input type="password" name="pswd" placeholder="Password" required />
          
        </div>
        <div class="input-group">
        <a href="#" class="forgot">Forgot password?</a><br><br>
        </div>
        <button type="submit" class="login-btn">Login</button>
      </form>
      <br><br><br>
      
      <p class="signup-link">Or Create An account <br><br><a href="signphp.php">SIGN UP</a></p>
    </div>
  </div>
</body>
</html>