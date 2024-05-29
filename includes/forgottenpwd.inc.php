<?php
include_once 'dbh.inc.php';
include_once 'functions.inc.php';



if(isset($_POST['forgotpwd'])){


    $email= $_POST['email'];
    $sql="SELECT*FROM users ";
    $query= mysqli_query($conn,$sql);
    $queryResult= mysqli_num_rows($query);
   
    while($data=mysqli_fetch_assoc($query)){

        if($data['userEmail']===$email){
            session_start();
            $_SESSION['email']=$data['userEmail'];       
        header("location:../verification.php?email=$email");
        exit();
        }

    }
  
        header("location:../Forgottenpwd.php?error=EmailNotFound");
        exit();
    
}
/* verification */
if(isset($_POST['verifypwd'])){
    $verificationcode=rand()%99999;
    $email= $_POST['email'];
    $code=$_POST['code'];
    //verification code
    $to=$email;
    $subject="Password reset verfication code";
    $message=$verificationcode;
    $header = "From: noreply@yoursite.com";
    mail($to,$subject,$message,$header);


   if($code==$verificationcode){
       header("location:../resetpwd.php?email=$email");
      
   }
   else{
    header("location:../verification.php?email=failed");
   
   }

}


/*Reset password */

if(isset($_POST['resetpwd'])){
    $pwd=$_POST['password'];
    $email=$_POST['email'];
    $repeatpwd=$_POST['pwdrepeat'];
    

    if(passwordMatch($pwd,$repeatpwd)!==false){
        header("location:../resetpwd.php?error=invalidpwddontmatch");
        exit();
    }
    else if(pwdshort($pwd)!==false){
        header("location:../resetpwd.php?error=pwdshort");
        exit();
    }
    
    else {
        
        
       
      
         $sql="SELECT*FROM users ";
        $query= mysqli_query($conn,$sql);
        $queryResult= mysqli_num_rows($query);
    

        while($data=mysqli_fetch_assoc($query)){

            if($data['userEmail']==$email){
              $sqli="UPDATE users SET userPwd=? WHERE userEmail=?";
              $stmt=mysqli_stmt_init($conn);

              if(!mysqli_stmt_prepare($stmt,$sqli)){
                 echo "There was an error!";
                  exit();
              }
      
              $newPassword=password_hash($pwd, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt,"ss",$newPassword,$email);
              mysqli_stmt_execute($stmt);


                 
                header("location:../login.php?error=passwordchanged");
            exit();
            }
    
         }

         header("location:../resetpwd.php?error=Emaildoesntexist");
         exit();
       
    }
    

}

