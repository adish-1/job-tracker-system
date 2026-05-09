<?php
  $message="";
  if(isset($_GET['msg']))
  {
      if($_GET['msg']=="duplicate")
  {
    $message="<h6>Phone Number already exist</h6>";
  }
   else if($_GET['msg']=="datafail")
    {
      $message= "<h6>DATA INSERTION FAILED</h6>";
    }
    else if($_GET['msg']=="success")
    {
      $message= "<h6>DATA INSERTED SUCCESSFULLY..!</h6>";
    }
    else if($_GET['msg']=="failed")
    {
      $message= "<h6>DATA INSERTION FAILED</h6>";
    }
    else if($_GET['msg']=="valid")
    {
      $message= "<h6>ENTER VALID DATA..</h6>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
      body {
    background: linear-gradient(135deg,#005b9a,#0096ff);
    background-repeat: no-repeat;
    padding-top: 40px;
    min-height: 100vh;
}
  h6
  {
      font-size: 40px;
      color: white;
      font-family: 'Poppins',sans-serif;
      text-align:center;
  }
   a
  {
   text-align: center;
   text-decoration: none;
   font-weight: bold;
   color:white;
   font-family:'Poppins',sans-serif;
   }
   #container
   {
    display:flex;
    flex-direction:column;
    justify-content:center;
    }
    </style>
</head>
<body>
    <div id="container">
        <?php
          echo $message;
         ?>
    <a href="dataentry.html">HOME</a>
    </div>
</body>
</html>
