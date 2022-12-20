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

   
      
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand active" href="index.php">Biblioteca Fagaras</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="index.php">HOME</a></li>
              <li><a href="books.php">BOOKS</a></li>
              <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
  
            <ul class="nav navbar-nav navbar-right">
  
              
              <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
              <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
            </ul>
  
        </div>
      </nav>

            
    <section>
        <div class="log_img">
            <br>
            <div class="box1">
                <br>
                <h1 style="text-align: center; font-size: 35px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Sistem de gestiune</h1><br>
                <h1 style="text-align:center; font-size: 25px;"> Logare Utilizator</h1>
               
                <form name="login" action="" method="" >
                   <br><br>
                    <div class="login">
                        <input type="text" placeholder="Username" required=""><br>
                        
                        <br>
                        <input type="password" placeholder="Password" required="">
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
   
    
   
</html>