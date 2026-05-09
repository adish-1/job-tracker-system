<?php

  include("db.php");
  
  $message="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
     if(isset($_POST['name'],$_POST['age'],$_POST['mail'],$_POST['Phno'],$_POST['education'],$_POST['skills']))
     {
       if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['mail']) && !empty($_POST['Phno']) && !empty($_POST['education']) && !empty($_POST['skills']))
       {
         $name=$_POST['name'];
         $age=$_POST['age'];
         $mail=$_POST['mail'];
         $phoneNo=$_POST['Phno'];
         $education=$_POST['education'];
         $skills=$_POST['skills'];
       }
       else 
       { 
          header("location:message.php?msg=datafail");
         exit();
       }
       $check=mysqli_prepare($conne,"select Phno from job_users where Phno=?");
       mysqli_stmt_bind_param($check,"s",$phoneNo);
       mysqli_stmt_execute($check);
       mysqli_stmt_store_result($check);
       if(mysqli_stmt_num_rows($check)>0)
       {
         header("location:message.php?msg=duplicate");
         exit();
       }
       $sql=mysqli_prepare($conne, "insert into job_users(name,age,mail,Phno,education,skills) values(?,?,?,?,?,?)");

        if($sql)
        {
          mysqli_stmt_bind_param($sql,"sissss",$name,$age,$mail,$phoneNo,$education,$skills);
        }
        if(mysqli_stmt_execute($sql))
        {
          mysqli_stmt_close($sql);
           header("location:message.php?msg=success");
           exit();
        }
         else
         {
          header("location:message.php?msg=failed");
          exit();
          }
     }
     else
     {
       header("location:message.php?msg=valid");
       exit();
      }
  }
 ?>
