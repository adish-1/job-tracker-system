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
    flex-direction:column;
    align-items: center;
    background: linear-gradient(135deg,#786598,#caaaff);
    background-repeat: no-repeat;
    position: relative;
    min-height: 100vh;    
    row-gap:20px;
}
 table
 {
     width: 90%;
     max-width:800px;
     margin-top:60px;
     background: whitesmoke;
     border-radius: 10px;
     font-size: 20px;
     box-shadow: 0 0 10px #65ff00;     
     font-weight:bold;
     text-align:center;
     font-family: 'Poppins',sans-serif;
     table-layout:fixed;
     word-wrap:break-word;
 }
 h3
 {
   font-family: 'Poppins',sans-serif;
   color: white;
   font-size: 25px;
   text-align:center;
   margin-top:30px;
  }
   th
    {
      background:darkblue;
        color:white;
        }
          </style>
</head>
<body>
    
        <?php

include("db.php");

   if(isset($_POST['skill']))
   {
     $value=$_POST['skill'];
     $query="select * from job_users where skills like ?";
     $check=mysqli_prepare($conne,$query);
     if($check)
     {
       $like="%$value%";
       mysqli_stmt_bind_param($check,"s",$like);
       mysqli_stmt_execute($check);
       $result=mysqli_stmt_get_result($check);
     }
     else
     {
     echo "statement preparation failed";
     }
   }
     else if(isset($_POST['age']))
     {
       $value=$_POST['age'];
       $query="select * from job_users where age=?";
       
       $check=mysqli_prepare($conne,$query);
     if($check)
     {
       mysqli_stmt_bind_param($check,"i",$value);
       mysqli_stmt_execute($check);
       $result=mysqli_stmt_get_result($check);
     }
     else
     {
     echo "statement preparation failed";
     }
     }
      else if(isset($_POST['education']))
     {
       $value=$_POST['education'];
       $query="select * from job_users where education like ?";
      $check=mysqli_prepare($conne,$query);
     if($check)
     {
       $like="%$value%";
       mysqli_stmt_bind_param($check,"s",$like);
       mysqli_stmt_execute($check);
       $result=mysqli_stmt_get_result($check);
     }
     else
     {
     echo "statement preparation failed";
     }
     }
     elseif(isset($_POST['edu'],$_POST['skills']))
     {
       $value=$_POST['edu'];
       $value1=$_POST['skills'];
       $query="select * from job_users where skills like ? and education like ?";
       $check=mysqli_prepare($conne,$query);
       if($check)
       {
          $like1="%$value%";
          $like="%$value1%";
          mysqli_stmt_bind_param($check,"ss",$like,$like1);
       mysqli_stmt_execute($check);
       $result=mysqli_stmt_get_result($check);
       }
       else
     {
     echo "statement preparation failed";
     }
     }
     else
     {
      echo "<h3>NO VALUE PASSED</h3>";
      exit();
     }
     if( mysqli_num_rows($result)>0)
      {
      echo"<table rules=all cellspacing=4 cellpadding=15>";
      echo" <tr>";
      echo" <th>name</th>";
      echo" <th>age</th>";
      echo" <th>mail</th>";
      echo" <th>Phno</th>";
      echo" <th>education</th>";
      echo" <th>skills</th>";
      echo"</tr>"; while($row=mysqli_fetch_assoc($result))
       {
         echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['mail']."</td>";
        echo "<td>".$row['Phno']."</td>";
        echo "<td>".$row['education'].
        "</td>";
         echo "<td>".$row['skills']."</td>";
          echo "</tr>";
       }
       echo "</table>";
      }
      else
      {
        echo "<h3>NO RESULT FOUND</h3>";
      }
       
     mysqli_close($conne);
    ?>
         
    
</body>
</html>