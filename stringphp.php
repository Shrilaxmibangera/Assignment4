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
        <h1>Enter String:</h1><input type="text" name="txt1"/><br>
        <h1>Select Options</h1>
        <h3>1.Reversing The String</h3>
        <h3>2.Finding The Lenght Of The String</h3>
        <h3>3.Substring Operation</h3>
        <h3>4.Converting to Uppercase</h3>
        <h3>5.Converting To Lowercase</h3>
        <h3>6.Counting the NUmber Of Words</h3>
        <br>
        Enter the option:<input type="text" name="op"/><br><br>
        <button type="submit" name="submit" value="sumit">Submit</button><br><br>
    </form>
    <?php
        
        if(isset($_POST["submit"]))
        {
            $a=$_POST["txt1"];
            $op=$_POST["op"];
            switch($op)
            {
                case 1:
                        echo strrev($a);
                        break;
                case 2:
                        echo strlen($a);
                        break;
                case 3:
                        echo substr($a,2);
                        break;
                case 4:
                        echo strtoupper($a);
                        break;
                case 5:
                        echo strtolower($a);
                        break;
                case 6:
                        echo str_word_count($a);
                        break;
                default:
                        echo "Invalid Option";
                        break;
            }
        }
    ?>
</body>
</html>