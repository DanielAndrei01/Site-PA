<?php
include "connection.php";
include "navbar.php";
include "footer.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Login</title>
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
        <div class="log_img">
            <br>
            <div class="box1">
                <br>
                <h1 style="text-align: center; font-size: 35px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Sistem de gestiune</h1><br>
                <h1 style="text-align:center; font-size: 25px;"> Logare Utilizator</h1>
               
                <form name="login" action="" method="post" >
                   <br><br>
                    <div class="login">
                        <input type="text" name ="username" placeholder="Username" required=""><br>
                        
                        <br>
                        <input type="password" name="password" placeholder="Password" required="">
                       <br> <br><p><a style="text-decoration: none" href="">Forgot Password?</a></p>
                        <br>
                      
                        <input class="btn btn-default" type="submit" name="submitLogin" value="LOGIN" style="color:white;background-color: black;border-color: black; width:70px ;height :30px">
                        
                      <br><br>
                        
                     
                            <p ><a  style="text-decoration: none" href="registration.php"><span class="glyphicon glyphicon-user"  ></span>Sign up</a></p>
                       
                     </div>
                </form>
               

            </div>
        </div>
    </section>



   <?php

   if(isset($_POST['submitLogin']))
   {
      $count=0;
      $res = mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' AND password='$_POST[password]';");
      $count = mysqli_num_rows($res);

      if($count==0)
      {
        ?>
         <script type="text/javascript">
        alert("The username or password are not corect.");
      </script>

      <!-- <div class="alert alert-danger" style="width: 350px; margin-left:40%;">
        <strong>The username or password are not corect.</strong>
      </div>------------------mesaj de eroare -->
        <?php

      }
      else{
        ?>

          <script type="text/javascript">
            window.location="index.php";
            </script>

        <?php
      }
   }
   
   ?>
    
   
</html>