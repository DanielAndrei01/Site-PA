<?php
include "connection.php";
include "navbar.php";
include "footer.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Carti</title>
        <style type="text/css">
            .srch{
                margin-left:40%;
            
            }
        </style>
    </head>

    <body>
        <!--Seach bar-------------------------------------->
        <div class="srch">
            <form class ="navbar-form" method="post" name="form1">
                <div>
                    <input class="form-control" type="text"name="search" placeholder="Cauta carti..." required="">
                    <button style="background-color:#00ffac;"type="submit" name ="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </form>
        </div>
   
       
<h2>Lista de carti</h2>
    <?php   

            if(isset($_POST['submit']))
            {
                $q=mysqli_query($db,"SELECT * FROM books WHERE name LIKE'%$_POST[search]%'");
                if(mysqli_num_rows($q)==0)
                {
                    echo "N e scuzati,nu avem aceasta carte.";
                }
                else{
                    echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:#00ffac; '>";
        //table header
             echo "<th>"; echo "ID"; echo"</th>";
             echo "<th>"; echo "Titlu"; echo"</th>";
             echo "<th>"; echo "Autor"; echo"</th>";
             echo "<th>"; echo "Editie"; echo"</th>";
             echo "<th>"; echo "Status"; echo"</th>";
             echo "<th>"; echo "Cantitate"; echo"</th>";
             echo "<th>"; echo "Departament"; echo"</th>";
        echo "</tr>";

        while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['cid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['autor']; echo "</td>";
				echo "<td>"; echo $row['editie']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['cantitate']; echo "</td>";
				echo "<td>"; echo $row['departament']; echo "</td>";

				echo "</tr>";
			}
                }
            }
//------------------------------daca nu a fost apasat butonul

            else
            {
                $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC");
                echo "<table class='table table-bordered table-hover'>";
                echo "<tr style='background-color:#00ffac; '>";
                //table header
                     echo "<th>"; echo "ID"; echo"</th>";
                     echo "<th>"; echo "Titlu"; echo"</th>";
                     echo "<th>"; echo "Autor"; echo"</th>";
                     echo "<th>"; echo "Editie"; echo"</th>";
                     echo "<th>"; echo "Status"; echo"</th>";
                     echo "<th>"; echo "Cantitate"; echo"</th>";
                     echo "<th>"; echo "Departament"; echo"</th>";
                echo "</tr>";
        
                while($row=mysqli_fetch_assoc($res))
                    {
                        echo "<tr>";
                        echo "<td>"; echo $row['cid']; echo "</td>";
                        echo "<td>"; echo $row['name']; echo "</td>";
                        echo "<td>"; echo $row['autor']; echo "</td>";
                        echo "<td>"; echo $row['editie']; echo "</td>";
                        echo "<td>"; echo $row['status']; echo "</td>";
                        echo "<td>"; echo $row['cantitate']; echo "</td>";
                        echo "<td>"; echo $row['departament']; echo "</td>";
        
                        echo "</tr>";
                    }
                echo "</table>";

            }

      
    ?>
    </body>
</html>
