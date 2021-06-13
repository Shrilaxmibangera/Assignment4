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
        Enter the Meter Number:<input type="text" name="txt1"/><br><br>
        Enter the Customer Name:<input type="text" name="txt2"/><br><br>
        Enter the Previus Reading:<input type="text" name="txt3"/><br><br>
        Enter the Current Reading:<input type="text" name="txt4"/><br><br>
        <input type="submit" name="submit" value="generate"/>
        <?php
        if(isset($_POST["submit"]))
        {
            $pread=$_POST["txt3"];
            $cread=$_POST["txt4"];
            if($cread<$pread)
            {
                echo "<br><br><label>Current Reading Cannot be less than previous reading</label>";
                return;
            }
            else
            {
                $unit=$cread-$pread;
                if($unit<100)
                {
                    $crate=3*$unit;
                    echo "<br><br>Consumed Rate:<label>$crate</label>";
                }
                else if($unit>=100 && $unit<200)
                {
                    $crate=4*$unit;
                    echo "<br><br>Consumed Rate:<label>$crate</label>";
                }
                else if($unit>=200 && $unit<300)
                {
                    $crate=5*$unit;
                    echo "<br><br>Consumed Rate:<label>$crate</label>";
                }
                else if($unit>=300)
                {
                    $crate=6*$unit;
                    echo "<br><br>Consumed Rate:<label>$crate</label>";
                }
            }
        }
    ?>
    </form>
</body>
</html>