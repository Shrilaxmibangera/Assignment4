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
        <h1>Enter First Number:</h1><input type="text" name="txt1"/><br>
        <h1>Enter second Number:</h1><input type="text" name="txt2"/><br>
        <h1>Select Options</h1>
        <h3>1.Addition</h3>
        <h3>2.Subtraction</h3>
        <h3>3.Multiplication</h3><br>
        Enter the option:<input type="text" name="op"/><br><br>
        <button type="submit" name="submit" value="sumit">Submit</button><br><br>
    </form>
    <?php
        
        if(isset($_POST["submit"]))
        {
            $a=$_POST["txt1"];
            $b=$_POST["txt2"];
            $op=$_POST["op"];
            switch($op)
            {
                case 1:
                        $c=$a+$b;
                        echo $c;
                        break;
                case 2:
                        $c=$a-$b;
                        echo $c;
                        break;
                case 3:
                        $c=$a*$b;
                        echo $c;
                        break;
                default:
                        echo "Invalid Option";
                        break;
            }
        }
    ?>
</body>
</html>