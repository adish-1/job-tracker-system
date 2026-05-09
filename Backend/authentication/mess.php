<!DOCTYPE html>    
<html lang="en">    
<head>    
    <meta charset="UTF-8">    
    <title>Page title</title>        
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">    
      <style>    
          body     
{    
    display: flex;    
    justify-content: flex-start;
    flex-direction: column;
    min-height: 100vh;    
    background-repeat: no-repeat;    
    background: linear-gradient(135deg,#006ba0,#00abff);    
}    
 h2    
 {    
     font-size: 30px;    
     color:whitesmoke;    
     font-family:'Poppins',sans-serif;    
     text-align:center;
 }   
 a
 {
  margin:auto;
 text-decoration:none;
 color:white;
  text-align:center;
  background:#ff5e00;
  padding:3%;
  font-weight:bold;
  font-size:20px;
  border-radius:10px;  
  transition: 0.3s ease all;
  }
  a:hover
  {
   transform: scale(1.1);
    }
      </style>    
</head>    
<body>    
    <?php
     if(isset($_GET['msg']))
     {
        if($_GET['msg']=="novalue")
        {
        $message="Enter the details";
        }
       else if($_GET['msg']=="wronginput")
        {
        $message="WRONG INPUTS";
        }
     }
     else
     {
       $message= "NO ACCSESS";
     }
    echo"<h2>$message</h2>";    
    ?>    
        <a href="../loginpage/login.html">TRY AGAIN</a>
    
</body>    
</html>
