
<?php
include "connection.php";
include "navbar.php";
include "footer.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1"><!--pentru a face marimea paginii sa se adapteze la latimea ecranului-->
        <link rel="stylesheet" type="text/css" href="style.css">


                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
            section
            {
                margin-top:  -20px;
            }
        </style>

    </head>

   
      
    
    <section>
        <div class="reg_img">
            <br>
            <div class="box2">
                <br>
                <h1 style="text-align: center; font-size: 35px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Sistem de gestiune</h1>
                <h1 style="text-align:center; font-size: 25px;"> Logare Utilizator</h1>
               
                <form name="user_reg" action="" method="post" >
                   
                    <div class="login">
                        <input  type="text" name="nume" placeholder="Nume" required=""><br>
                        
                        <br>
                        <input  type="text" name="prenume" placeholder="Prenume" required=""><br>
                        <br>
                        <input  type="text" name="username" placeholder="Username" required=""><br>
                        <br>
                        <input type="password" name="password" placeholder="Parola" required="">
                      <br><br>
                        <input  type="text" name="roll" placeholder="Roll" required="">
                       <br><br>
                       <input  type="text" name="email" placeholder="Email" required="">
                      
                       <br><br>

                       <input  type="text" nume ="contact" placeholder="Numar de telefon" required="">
                       <br><br>
                       <input  class="btn btn-default" type="submit" name="submit" value="Sign Up"
                       style="color:White;width: 70px; height:30px;border-color: black; background-color: black;">
                      
                        <br><br>
                     
                           
                       
                     </div>
                </form>
               

            </div>
        </div>

    </section>
    <?php

if(isset($_POST['submit']))
{
  $count=0;
  $sql="SELECT username from `student`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['username']==$_POST['username'])
    {
      $count=$count+1;
    }
  }
  if($count==0)
  {
    mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[nume]', '$_POST[prenume]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]');");
  ?>
    <script type="text/javascript">
      
     alert("Registration successful");

    </script>
  <?php
  }


  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
    <?php

  }

}

?>
  
</body>
</html>