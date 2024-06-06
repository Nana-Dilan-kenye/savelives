<?php

function EmptyInput($name,$birthdate,$gender
,$email,$username,$weight,$bloodgroup,$wanum,$region, $city,$pwd,$repeatpwd){
 
    if(empty($name)||empty($birthdate)||empty($gender)||empty($email)||empty($username)||empty($weight)
    ||empty($bloodgroup)||empty($wanum)||empty($region)||empty($city)||empty($pwd)||empty($repeatpwd)
    ){
       return true;
    }
    else{
        return false;
    }
}
function EmptyInputlogin($username,$pwd){
    if(empty($username)||empty($pwd)){
        return true;
    }
    else {
        return false;
    }
}

function Invaliduid($username){
  
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){

      return true;
    }
    else{
        return false;
    }

}

 function Invalidemail($email){

     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         return true;
     }
     else{
         return false;
     }
 }

 function Invalidweight($weight){
     if( !preg_match("/^[0-9]*$/",$weight)){

         return true;
     }
     else{
         return false;
     }
 }

 /*function InvalidBloodgroup($bloodgroup){
    if(!preg_match("/^[aboABO+]*$/",$bloodgroup)){
        return true;
    }
    else{
        return false;
    }
 }*/
     function InvalidWanum($wanum){
        if(!preg_match("/^[0-9]*$/",$wanum)){
            return true;
        }
        else{
            return false;
        }
     }

      function Invalidbirthdate($birthdate){
        if(preg_match("/^[0-9]*$/",$birthdate)){
            return true;
        }
        else{
            return false;
        }
     }
    
     function Invalidgender($gender){
        if(!preg_match("/^[femaleFEMALE]*$/",$gender)){
            return true;
        }
        else{
            return false;
        }
     }

      function Invalidregion($region){
        if(!preg_match("/^[a-zA-Z]*$/",$region)){
            return true;
        }
        else{
            return false;
        }
      }
      function Invalidcity($city){
        if(!preg_match("/^[a-zA-Z]*$/",$city)){
            return true;
        }
        else{
            return false;
        }
      }
      function passwordMatch($pwd,$repeatpwd){

        if ($pwd!==$repeatpwd){
            return true;
        }
        else {
            return false;
        }
      }
      function pwdshort($pwd){

        if (strlen($pwd)<7){
            return true;
        }
        else {
            return false;
        }
      }

      function invalidfullname($name){
        if (strlen($name)<7){
            return true;
        }
        else {
            return false;
        }
      }
      
      function useruidExist($conn,$username,$email,$wanum){
        
        $sql="SELECT * FROM users WHERE userName=? or userEmail=? or userWanum=?;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:../signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"sss",$username,$email,$wanum);
        mysqli_stmt_execute($stmt);

        $resultData=mysqli_stmt_get_result($stmt);

        if($row=mysqli_fetch_assoc($resultData)){
         
            return $row;
        }
        else{
             return false;
        }
            mysqli_stmt_close($stmt);
      }
      /*creating a new user */

      function  createUser($conn,$name,$username,$email,$wanum,$bloodgroup,$weight,$gender,$birthdate
      ,$region, $city,$pwd,$lastTran){
        
        $sql="INSERT INTO users (userFullname,userName,userEmail,userWanum,userBloodgroup,userWeight,userGender,userBirth,userRegion,userCity,userPwd,userLastTran) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:../signup.php?error=stmtfailed");
            exit();
        }

        $pwdhashed=password_hash($pwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssssssssssss",$name,$username,$email,$wanum,$bloodgroup,$weight,$gender,$birthdate,$region,$city,$pwdhashed,$lastTran);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);


        $useruidExist= useruidExist($conn,$username,$username,$username);
        
        session_start();
        $_SESSION["userId"]=$useruidExist["userId"];
        $_SESSION["userName"]=$useruidExist["userName"];

        header("location:../dashboard.php");

       
      }

      /*loging a user in*/


      function loginUser($conn,$username,$pwd){
          $useruidExist= useruidExist($conn,$username,$username,$username);
            if($useruidExist===false){
                header("location:../login.php?error=wronglogin");
                exit();
            }

            $pwdhashed=$useruidExist["userPwd"];
            $checkpwd=password_verify($pwd,$pwdhashed);
            if($checkpwd===false){
                header("location:../login.php?error=wronglogin");
            }
            else if($checkpwd===true){
                
                session_start();
                $_SESSION["userId"]=$useruidExist["userId"];
                $_SESSION["userName"]=$useruidExist["userName"];
                
                // var_dump($_SESSION["userId"]);
                // var_dump($_SESSION["userName"]);

               header("location:../dashboard.php");
            }
          }
      

         /*eligible for donation */
          function eligible($LastTran,$gender){
           $now=time();
           $trans_date=strtotime($LastTran);
           $diff=$now-$trans_date;
           $result=$diff/(60*60*24);

           if($result>=90 && $gender=="Male"){
               return 1;
           }
           else if($result>=140 && $gender=="Female"){
            return 1;
            }
            else{
                return 0;
            }


         }
         


       