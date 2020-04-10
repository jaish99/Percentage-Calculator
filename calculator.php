<html>
    <head>
        <title>Student Registration Form</title>
        <link rel = "stylesheet" type = "text/css" href = "calculator.css" />
    </head>
 
    <body>
        <br>
        <form name="myform" action="calculator.php" method="post" />
        <h3>PERCENTAGE CALCULATOR</h3>
        <table align="center" cellpadding = "9">
        <tr>
        <td>Registration No.</td>
        <td><input type="number"  name="registration-number" required/>
        </td>
        </tr>

        <tr>
        <td>PHYSICS</td>
        <td><input type="number" step="0.1" name="physics" required/>
        </td>
        </tr>

        <tr>
        <td>CHEMISTRY</td>
        <td><input type="number" step="0.1" name="chemistry" required/>
        </td>
        </tr>

        <tr>
        <td>MATHEMATICS</td>
        <td><input type="number" step="0.1" name="maths" required/>
        </td>
        </tr>

        <tr>
        <td>ENGG.GRAPHICS</td>
        <td><input type="number" step="0.1" name="graphics" required/>
        </td>
        </tr>

        <tr>
        <td>ENGLISH</td>
        <td><input type="number" step="0.1" name="english" required/>
        </td>
        </tr>

        <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        </td>
        </tr>
        </table>
        </form>

<?php
        include "db.php";

        $reg_no         =   $_POST["registration-number"];
        $phy            =   $_POST["physics"];
        $chem           =   $_POST["chemistry"];
        $maths          =   $_POST["maths"];
        $engg_graphics  =   $_POST["graphics"];
        $eng            =   $_POST["english"];

        $sum            = $phy+$chem+$maths+$engg_graphics+$eng;
        $percent        =($sum/500)*100;
        
        $insert_sql = "INSERT INTO Student_Result (Registration_No,Physics,Chemistry,".
                       "Mathematics,Engineering_Graphics,English,Percentag) ".
                       "VALUES ($reg_no,$phy,$chem,$maths,$engg_graphics,$eng,$percent);";
        $connection->query($create_sql);
        $connection->query($insert_sql);

        echo "<script>alert('YOUR PERCENTAGE IS $percent')</script>"
?>

        </body>
</html>