
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
<input type="text" name="txtno" placeholder="Enter the number" required/>
<input type="submit" value="submit" name="submit"/>
<?php
function factorial($n)
{
    $fact=1;
    for($i=1;$i<=$n;$i++)
    {
        $fact=$fact*$i;
    }
    return $fact;
}
if(isset($_POST["submit"]))
{
    $n=$_POST["txtno"];
$res=factorial($n);
echo "<br><br>Factorial Of a Number ".$n." is ".$res;
}

?>
</form>
</body>
</html>
