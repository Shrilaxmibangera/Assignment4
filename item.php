<?php
$s=$_POST["txt1"];
$array=explode(",",$s);
$s1=$_POST["txt2"];
$array1=explode(",",$s1);
$ciname=count($array);
$ciprice=count($array1);
$maxvalue=max($array1);
$minvalue=min($array1);
if($ciname==$ciprice)
{
    
        echo "<center><table border=1 cellpadding=10 style=text-align:center;><tr><th>Item Name</th><th>Item Cost</th></tr>";
        for($i=0;$i<$ciname;$i++)
        {
           echo "<tr><td>$array[$i]</td><td>$array1[$i]</td></tr>";
            
        }
        "</table></center><br>";
        for($x=0;$x<$ciname;$x++)
        {
            if($maxvalue==$array1[$x])
            {
                echo "Costlier Item Is:".$array[$x],"<br><br>";
            }
            if($minvalue==$array1[$x])
            {
                echo "Cheapest Item Is:".$array[$x],"<br><br>";
            }
        
        }
}
else
{
    echo "Number of Item Name and price should be same";
}
?>