<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css" />
    <script> 
        function formValidation(){ 
        let x=document.forms["form1"]["fname"].value; 
        if(x==""){ 
        alert("USERNAME MUST BE FILLED OUT"); return false; 
        } 
        let x1=document.forms["form1"]["email"].value; 
        if(x1==""){ 
        alert("EMAIL MUST BE FILLED OUT"); return false; 
        } 
        let z=document.forms["form1"]["phno"].value; 
        if(z==""){ 
            alert("Enter your Phone number first!"); return false; 
        } 
        let y=document.forms["form1"]["pswd"].value; 
        if(y==""){ 
        alert("PASSWORD MUST BE FILLED OUT"); return false; 
        } 
        
        } 
        
        </script> 

    
</head>

<body>
<?php        
        include 'server.php';
    if($con){
        // echo "Connnection successful";
    


        $userexists=0;
        $registered=0;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_REQUEST['fname'];
        $password=$_REQUEST['pswd'];
        $phone=$_REQUEST['phno'];
        $email=$_REQUEST['email'];
        $sql="SELECT * FROM signup WHERE fname='$name' AND pswd='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                $userexists = 1;
            }
        }
        if($userexists==1){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error</strong> User already exists.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        else{
            
                    $sql1="INSERT INTO signup values ('$name','$email','$phone','$password')";
                    $result=mysqli_query($con,$sql1);
                    if($result){
                        $registered=1;
                        if($registered){
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congrats</strong> You are successfully Signed In. <a href="logphp.php">Login Now</a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        }
                        
                    }else{
                        die.(mysqli_error($con));
                }
            }
    }
    }
    else{
            
        }

    ?>
    
    
    <div class="background">
        <div class="signup-container">
            <h2>Sign Up </h2>
            <h3>Create Your Account</h3>
            <form action="signphp.php" method="post" id="form1" onsubmit="return formValidation()">
                <div class="input-group">
                    
                    <input type="text" name="fname" placeholder="UserName"  />
                </div>
                <div class="input-group">
                    
                    <input type="email" name="email" placeholder="Email Address" />
                </div>
                <div class="input-group">
                    
                    <input type="tel" name="phno" placeholder="Phone No" />
                    
                </div>
                <div class="input-group">
                    
                    <input type="password" name="pswd"placeholder="Password"  />
                    
                </div>
                <button type="submit" class="signup-btn">Sign Up</button>
                <p class="login-text">I'm already a member! <a href="logphp.php">Sign In</a></p>
            </form>
        </div>
    </div>
</body>

</html>