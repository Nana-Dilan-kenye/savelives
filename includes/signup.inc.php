<?php

if(isset($_POST["signup"])){
 
    $name=$_POST["name"];
    $birthdate=$_POST["birthdate"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $username=$_POST["uid"];
    $weight=$_POST["weight"];
    $bloodgroup=$_POST["bloodgroup"];
    $wanum=$_POST["wanum"];
    $region=$_POST["region"];
    $city=$_POST["city"];
    $pwd=$_POST["pwd"];
    $repeatpwd=$_POST["repeatpwd"];
    $city=$_POST["city"];
    $pwd=$_POST["pwd"];
    $lastTran=$_POST["lastTran"];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(EmptyInput($name,$birthdate,$gender,$email,$username,$weight,$bloodgroup,$wanum,$region, $city,$pwd,$repeatpwd)!==false){

     header("location:../signup.php?error=emptyInput");
     exit();
    }
    else if(Invaliduid($username)!==false){
        header("location:../signup.php?error=invaliduid");
        exit();
    }
    else if(Invalidemail($email)!==false){
        header("location:../signup.php?error=invalidemail");
        exit();
    }
    else if(Invalidweight($weight)!==false){
        header("location:../signup.php?error=invalidweight");
        exit();
    }
   /* else if(InvalidBloodgroup($bloodgroup)!==false){
        header("location:../signup.php?error=invalidbloodgroup");
        exit();
    }*/
    else if(InvalidWanum($wanum)!==false){
        header("location:../signup.php?error=invalidwanum");
        exit();
    }
    else if(Invalidbirthdate($birthdate)!==false){
        header("location:../signup.php?error=invalidbirth");
        exit();
    }
    else if(Invalidgender($gender)!==false){
        header("location:../signup.php?error=invalidgender");
        exit();
    }
    else if(Invalidregion($region)!==false){
        header("location:../signup.php?error=invalidregion");
        exit();
    }
    
    else if(Invalidcity($city)!==false){
        header("location:../signup.php?error=invalidcity");
        exit();
    }
    
    else if(passwordMatch($pwd,$repeatpwd)!==false){
        header("location:../signup.php?error=invalidpwddontmatch");
        exit();
    }
    else if(pwdshort($pwd)!==false){
        header("location:../signup.php?error=pwdshort");
        exit();
    }
    else if(invalidfullname($name)!==false){
        header("location:../signup.php?error=invalidfullname");
        exit();
    }
    
    else if(useruidExist($conn,$username,$email,$wanum)!==false){
        header("location:../signup.php?error=useruidtaken");
        exit();
       }

       createUser($conn,$name,$username,$email,$wanum,$bloodgroup,$weight,$gender,$birthdate
       ,$region, $city,$pwd,$lastTran);
       
}
else{
    header("location: ../signup.php");
    exit();
}