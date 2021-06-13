<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $num1=$_POST["txtno"];
        $sum=0;
        $digit;
        $num2=$num1;
        if(isset($_POST["submit"]))
        {
            while($num1!=0)
            {
                $digit=$num1%10;
                $sum+=($digit*$digit*$digit);
                $num1=floor($num1/10);
                
            }
            echo "Amstrone of a number".$num2." "."is"." ".$sum,"<br>";
        }
        
    ?>
</body>
</html>