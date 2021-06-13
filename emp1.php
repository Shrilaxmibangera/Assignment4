<?php
if(isset($_POST["submit"]))
{
    echo $_POST["time"];
    if(isset($_POST["time"]))
    {
        $eno=$_POST["empno"];
        $fname=$_POST["empfname"];
        $lname=$_POST["emplname"];
        $addr=$_POST["addr"];
        $gender=$_POST["gender"];
        $img=$_POST["img"];
        $des=$_POST["desi"];
        $pno=$_POST["cno"];
        $empcat=$_POST["time"];
        if($_POST["time"]=="Part_Time")
        {
            $nohour=$_POST["nohour1"];
            $basic=$_POST["bsal"];
            $salary=($nohour*100)+$_POST["bsal"];
            echo "<center><h1>Employee Details</h1><table border=1 cellpadding=10 style=text-align:center><tr><th>Emp NO:</th><td>$eno</td></tr>
            <tr><th>Employee Name:</th><td>$fname $lname</td></tr>
            <tr><th>Photo:</th><td><img src=$img></td></tr>
            <tr><th>Address:</th><td>$addr</td></tr>
            <tr><th>Contact Number:</th><td>$pno</td></tr>
            <tr><th>Gender:</th><td>$gender</td></tr>
            <tr><th>Designation:</th><td>$des</td></tr>
            <tr><th>Emp Category:</th><td>$empcat</td></tr>
            <tr><th>Basic Salary:</th><td>$basic</td></tr>
            <tr><th>Net Salary:</th><td>$salary</td></tr>
        </table></center>
        ";
        }
        else if($_POST["time"]=="Full Time")
        {
        $basic=$_POST["bsal"];
        echo $basic;
            if($basic<10000)
            {
                $da=$basic*0.45;
                $hra=$basic*0.10;
                $pf=$basic*0.0;
                $tax=$basic*0.0;
                $gross=$basic+$da+$hra;
                $netsal=$gross-$pf-$tax;
            }
            else if($basic<50000 && $basic>=10000)
            {
                $da=$basic*0.75;
                $hra=$basic*0.20;
                $pf=1200;
                $tax=$basic*0.05;
                $gross=$basic+$da+$hra;
                $netsal=$gross-$pf-$tax;
            }
            else
            {
                $da=$basic*0.90;
                $hra=$basic*0.30;
                $pf=$basic*0.05;
                $tax=$basic*0.15;
                $gross=$basic+$da+$hra;
                $netsal=$gross-$pf-$tax;
            }
            echo "<center><h1>Employee Details</h1><table border=1 cellpadding=10 style=text-align:center><tr><th>Emp NO:</th><td>$eno</td></tr>
                                    <tr><th>Employee Name:</th><td>$fname $lname</td></tr>
                                    <tr><th>Photo:</th><td><img src=$img></td></tr>
                                    <tr><th>Address:</th><td>$addr</td></tr>
                                    <tr><th>Contact Number:</th><td>$pno</td></tr>
                                    <tr><th>Gender:</th><td>$gender</td></tr>
                                    <tr><th>Designation:</th><td>$des</td></tr>
                                    <tr><th>Emp Category:</th><td>$empcat</td></tr>
                                    <tr><th>Basic Salary:</th><td>$basic</td></tr>
                                    <tr><th>Net Salary:</th><td>$netsal</td></tr>
                                </table></center>
                                ";
        }
        else if($_POST["time"]=="Contract")
        {
        $basic=$_POST["bsal"];
        $monthsal=$basic/12;
        if($monthsal<5000)
        {
                $da=200;
                $hra=0;
                $tax=0;
                $gross=$basic+$da+$hra;
                $netsal=$gross-$tax;
            }
            else if($basic<=5000 && $basic>=25000)
            {
                $da=$monthsal*0.15;
                $hra=1000;
                $tax=$monthsal*0.03;
                $gross=$basic+$da+$hra;
                $netsal=$gross-$tax;
            }
            else
            {
                $da=$monthsal*0.2;
                $hra=$monthsal*0.05;
                $tax=$monthsal*0.09;
                $gross=$basic+$da+$hra;
                $netsal=$gross-$tax;
            }
            echo "<center><h1>Employee Details</h1><table border=1 cellpadding=10 style=text-align:center><tr><th>Emp NO:</th><td>$eno</td></tr>
                                    <tr><th>Employee Name:</th><td>$fname $lname</td></tr>
                                    <tr><th>Photo:</th><td><img src=$img></td></tr>
                                    <tr><th>Address:</th><td>$addr</td></tr>
                                    <tr><th>Contact Number:</th><td>$pno</td></tr>
                                    <tr><th>Gender:</th><td>$gender</td></tr>
                                    <tr><th>Designation:</th><td>$des</td></tr>
                                    <tr><th>Emp Category:</th><td>$empcat</td></tr>
                                    <tr><th>Basic Salary:</th><td>$basic</td></tr>
                                    <tr><th>Net Salary:</th><td>$netsal</td></tr>
                                </table></center>
                                ";
        }
        
    }
    
    
}
?>