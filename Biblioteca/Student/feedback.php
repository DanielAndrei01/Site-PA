<?php
include "connection.php";
include "navbar.php";
include "footer.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
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
        body{
                background-image: url("Poze/feedback.jpg");
                min-height: 1000px;
                height: 100%;
                width: 100%;
        }
        
        .wrapper{
            width:900px;
            height:600px;
            background-color: black;
            opacity:.8;
            color:white;
            margin-left:20%;
            padding:20px;
            margin-top:5%;
        }
        .form-control{
            height:100px;
            width:70%;
            margin-left:15%
        }
        tr{
            color:white;
        }
        </style>
        
    </head>

<body>
        <div class="wrapper">
                <br><br>
                <h3>Daca aveti o sugestie va rugam sa o adresati in acest spatiu</h3>

                <form style=" "action=" " method="post">
                <input class ="form-control"id="formular-com" type="text" name="comment" placeholder="Scrie ceva.... " >
                <br>
                <input class="btn btn-default" type="submit" name ="submit" value="Comment">
                <br>


            <div class="scroll">
                    <?php
                if(isset($_POST['submit']))
                {
                    $sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
                    if(mysqli_query($db,$sql))
                    {
                        $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                        $res=mysqli_query($db,$q);

                        echo "<table class='table table-bordered'>";
                        while ($row=mysqli_fetch_assoc($res)) 
                        {
                            echo "<tr>";
                                echo "<td>"; echo $row['comment']; echo "</td>";
                            echo "</tr>";
                        }
                    }

                }

                    else
                    {
                        $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
                            $res=mysqli_query($db,$q);

                            echo "<table class='table table-bordered'>";
                            while ($row=mysqli_fetch_assoc($res)) 
                            {
                                echo "<tr>";
                                    echo "<td>"; echo $row['comment']; echo "</td>";
                                echo "</tr>";
                            }
                    }
                        
                ?>
            </div>
        </div>

</body>
</html>