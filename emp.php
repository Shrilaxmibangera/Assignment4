<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    function selectradio(val)
    {
        var txt=val;
        if(txt=="Part_Time")  
        {
            var txt=document.getElementById("nohour").disabled=false;
        }  
        else
        {
            var txt=document.getElementById("nohour").disabled=true;
        }
    }
    </script>
</head>
<body>
    <form action="emp1.php" method="POST">
    <table border=1 cellpadding="10">
    <tr><th>Employee Number</th><td><input type="text" required name="empno"></td></tr>
    <tr><th>First Name:</th><td><input type="text" required name="empfname"></td></tr>
    <tr><th>Last Name:</th><td><input type="text" required name="emplname"></td></tr>
    <tr><th>Address:</th><td><textarea name="addr" required></textarea></td></tr>
    <tr><th>Gender:</th><td><input type="radio" required name="gender" value="Male">Male<input type="radio" name="gender" value="FeMale">Female</td></tr>
    <tr><th>Upload Image:</th><td><input type="file" required name="img"></td></tr>
    <tr><th>Designation:</th><td><input type="text" required name="desi"></td></tr>
    <tr><th>Phone Number:</th><td><input type="text" required maxlength="10" name="cno"></td></tr>
    <tr><th>Emp Category:</th><td><input type="radio" value="Part_Time" id="parttime" onclick="selectradio(this.value)" name="time">Part Time<input type="radio" value="Full Time" onclick="selectradio()" name="time">Full Time<input type="radio" value="Contract" onclick="selectradio()" name="time">Contract</td></tr>
    <tr><th>Number Of Hours:</th><td><input type="text" name="nohour1" id="nohour"></td></tr>
    <tr><th>Basic Salary:</th><td><input type="text" required name="bsal"></td></tr>
    <tr><th colspan="2"><input type="submit" name="submit"></th></tr>
    </table>
    </form>
</body>
</html>