<?php
        $num1=$_POST["txtno"];
        $revno=0;
        $sum=0;
        $num2=$num1;
        $digit;
        if(isset($_POST["submit"]))
        {
            while($num1!=0)
            {
                $digit=$num1%10;
                $sum+=$digit;
                $revno=$revno*10+$digit;
                $num1=floor($num1/10);
                
            }
            echo "Sum of a number".$num2." "."is"." ".$sum,"<br>";
            if($revno==$num2)
            {
                echo "Number is palindrome<br>";
            }
            else
            {
                echo "Number is not a palindrome";
            }
        }
        
    ?>