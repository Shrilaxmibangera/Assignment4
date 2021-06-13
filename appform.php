
<?php
$course=$_POST["cn"];
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$img=$_POST["img1"];
$faname=$_POST["father"];
$addr=$_POST["addr"];
$cno=$_POST["cno"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$doj=$_POST["doj"];
$hob="";
foreach($_POST["hob"] as $select)
{
    $hob.=$select.",";
}
$inst=$_POST["in"];
$bcourse=$_POST["course"];
if(isset($_POST["submit"]))
{
    if(isset($_POST["cn"]))
    {
       
        $txt1=$_POST["per"];
        if($course=="mca" || $course=="mtech")
        {
            if($txt1<70)
            {
                echo "Percentage Should Be More Than 70%";
            }
            else
            {
                echo "<center><h1>Student Application Form</h1><table border=1 cellpadding=10 style=text-align:center><tr><th>Name:</th><td>$fname $mname $lname</td></tr>
                                    <tr><th>Father's Name:</th><td>$faname</td></tr>
                                    <tr><th>Photo:</th><td><img src=$img></td></tr>
                                    <tr><th>Address:</th><td>$addr</td></tr>
                                    <tr><th>Contact Number:</th><td>$cno</td></tr>
                                    <tr><th>Gender:</th><td>$gender</td></tr>
                                    <tr><th>Father's Name:</th><td>$faname</td></tr>
                                    <tr><th>Email:</th><td>$email</td></tr>
                                    <tr><th>Dob:</th><td>$doj</td></tr>
                                    <tr><th>Percentage In Degree:</th><td>$txt1</td></tr>
                                    <tr><th>Hobies:</th><td>$hob</td></tr>
                                    <tr><th>Institution Studied:</th><td>$inst</td></tr>
                                    <tr><th>Course Studied:</th><td>$bcourse</td></tr>
                                    <tr><th>Course selected:</th><td>$course</td></tr>
                                </table></center>
                                ";
            }
        }
        else if($course=="mba")
        {
            if($txt1<60)
            {
                echo "Percentage Should Be More Than 60%";
            }
            else
            {
                echo "<center><h1>Student Application Form</h1><table border=1 cellpadding=10 style=text-align:center><tr><th>Name:</th><td>$fname $mname $lname</td></tr>
                                    <tr><th>Father's Name:</th><td>$faname</td></tr>
                                    <tr><th>Photo:</th><td><img src=$img></td></tr>
                                    <tr><th>Address:</th><td>$addr</td></tr>
                                    <tr><th>Contact Number:</th><td>$cno</td></tr>
                                    <tr><th>Gender:</th><td>$gender</td></tr>
                                    <tr><th>Father's Name:</th><td>$faname</td></tr>
                                    <tr><th>Email:</th><td>$email</td></tr>
                                    <tr><th>Dob:</th><td>$doj</td></tr>
                                    <tr><th>Percentage In Degree:</th><td>$txt1</td></tr>
                                    <tr><th>Hobies:</th><td>$hob</td></tr>
                                    <tr><th>Institution Studied:</th><td>$inst</td></tr>
                                    <tr><th>Course Studied:</th><td>$bcourse</td></tr>
                                    <tr><th>Course selected:</th><td>$course</td></tr>
                                </table></center>
                                ";
            }
        }
        else if($course=="msc")
        {
            if($txt1<40)
            {
                echo "Percentage Should Be More Than 40%";
            }
            else
            {
                echo "<center><h1>Student Application Form</h1><table border=1 cellpadding=10 style=text-align:center><tr><th>Name:</th><td>$fname $mname $lname</td></tr>
                                    <tr><th>Father's Name:</th><td>$faname</td></tr>
                                    <tr><th>Photo:</th><td><img src=$img></td></tr>
                                    <tr><th>Address:</th><td>$addr</td></tr>
                                    <tr><th>Contact Number:</th><td>$cno</td></tr>
                                    <tr><th>Gender:</th><td>$gender</td></tr>
                                    <tr><th>Father's Name:</th><td>$faname</td></tr>
                                    <tr><th>Email:</th><td>$email</td></tr>
                                    <tr><th>Dob:</th><td>$doj</td></tr>
                                    <tr><th>Percentage In Degree:</th><td>$txt1</td></tr>
                                    <tr><th>Hobies:</th><td>$hob</td></tr>
                                    <tr><th>Institution Studied:</th><td>$inst</td></tr>
                                    <tr><th>Course Studied:</th><td>$bcourse</td></tr>
                                    <tr><th>Course selected:</th><td>$course</td></tr>
                                </table></center>
                                ";
            }
        }
       
    }
}

?>