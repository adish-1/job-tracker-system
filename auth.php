<?php
 $username="root";
 $password="admin@123";
 if(isset($_POST['username'],$_POST['password']))
  {
    $name=$_POST['username'];
    $pass=$_POST['password'];
  }
   else 
   {
    header("location:mess.php?msg=novalue");
    exit();
   }
   if($name===$username && $pass===$password)
   {
      header("Location:../Dashboard/dash.html");

      exit();
   }
   else 
   {
      header("location:mess.php?msg=wronginput");
      exit();
   }   
?>
