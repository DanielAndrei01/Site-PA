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

   
      
    <nav class="navbar navbar-inverse navbar-fixed-top">
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
  
              <li><a href="Student-Login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
              <li><a href="Student_Login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
              <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
            </ul>
  
        </div>
      </nav>
    <section>
        <div class="reg_img">
            <br>
            <div class="box2">
                <br>
                <h1 style="text-align: center; font-size: 35px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Sistem de gestiune</h1>
                <h1 style="text-align:center; font-size: 25px;"> Logare Utilizator</h1>
               
                <form name="user_reg" action="" method="" >
                   
                    <div class="login">
                        <input type="text" placeholder="Nume" required=""><br>
                        
                        <br>
                        <input type="text" placeholder="Prenume" required=""><br>
                        <br>
                        <input type="text" placeholder="Username" required=""><br>
                        <br>
                        <input type="password" placeholder="Adresa de email" required="">
                      <br><br>
                        <input type="password" placeholder="Confirma Parola" required="">
                       <br><br>
                       
                       <input  class="btn btn-default" type="submit" name="sumbit" value="Sign Up"
                       style="color:White;width: 70px; height:30px;border-color: black; background-color: black;">
                      
                        <br><br>
                     
                           
                       
                     </div>
                </form>
               

            </div>
        </div>

    </section>
   
  
</body>
</html>