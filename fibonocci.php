<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Enter the number of elements:<input type="text" name="txt"/>
        <input type="submit" name="submit" value="generate"/>
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            $n=$_POST["txt"];
            $f1=0;
            $f2=1;
            echo $f1,"<br>";
            echo $f2,"<br>";
            for($i=2;$i<$n;$i++)
            {
                $f3=$f1+$f2;
                echo $f3,"<br>";
                $f1=$f2;
                $f2=$f3;
                $flag=true;
                for($x=2;$x<=$f3-1;$x++)
                {
                    if($f3 % $x == 0)
                    $flag=false;
                }
                if($flag)
                    echo $f3." is a prime number<br>";
                else
                   echo $f3." is not a prime number<br>";
            }
        }
    ?>
</body>
</html>