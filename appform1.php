<html>
<header>
<title>Student application form</title>
<script>
 function check()
 {
     var checkr=document.getElementById("mtech").disabled=true;
     var checkr=document.getElementById("mba").disabled=false;
     var checkr=document.getElementById("msc").disabled=false;
     var checkr=document.getElementById("mca").disabled=false;
 }
 function check1()
 {
     var checkr=document.getElementById("mtech").disabled=true;
     var checkr=document.getElementById("mba").disabled=true;
     var checkr=document.getElementById("msc").disabled=false;
     var checkr=document.getElementById("mca").disabled=false;
 }
 function check2()
 {
     var checkr=document.getElementById("mtech").disabled=true;
     var checkr=document.getElementById("msc").disabled=true;
     var checkr=document.getElementById("mba").disabled=false;
     var checkr=document.getElementById("mca").disabled=false;
 }
 function check3()
 {
    var checkr=document.getElementById("mtech").disabled=false;
     var checkr=document.getElementById("msc").disabled=true;
     var checkr=document.getElementById("mba").disabled=true;
     var checkr=document.getElementById("mca").disabled=true;
 }
 function subfun()
 {
    var div=document.getElementById("div").visibility=false;
 }
</script>
</header>
<body>
<center>
    <div id="div">
    <form action="appform.php" method="POST">
    <table border="0" cellpadding="20" style="border:1px solid black" width="600" height="600">
<tr><td colspan="2"><h1 style="text-align:center">Application Form</h1></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Student fname</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" style="border:none;border-bottom:3px solid #000;width:300px" required name="fname" placeholder="Enter your Name"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Middle name</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" style="border:none;border-bottom:3px solid #000;width:300px" required name="mname" placeholder="Enter your Name"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Last name</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" style="border:none;border-bottom:3px solid #000;width:300px" required name="lname" placeholder="Enter your Name"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Upload Photo</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td><input type="file" name="img1"/></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Father name</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" style="border:none;border-bottom:3px solid #000;width:300px" required name="father" placeholder="Enter your Name"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Address</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" style="border:none;border-bottom:3px solid #000;width:300px" required name="addr" placeholder="Enter your Name"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Contact no</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" maxlength="10" style="border:none;border-bottom:3px solid #000;width:300px" required name="cno" placeholder="Enter your Name"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="radio" name="gender" value="Male">Male&nbsp&nbsp<input type="radio" value="Female" name="gender">Female</td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="email" name="email" style="border:none;border-bottom:3px solid #000;width:300px" placeholder="Enter your address"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">DOB&nbsp&nbsp:</td><td align="center"><input type="text" name="doj" style="border:none;border-bottom:3px solid #000;width:300px"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Percentage In degree&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" name="per" style="border:none;border-bottom:3px solid #000;width:300px"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Hobies&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="checkbox" name="hob[]" value="sports">Sports&nbsp<input type="checkbox" value="singing" name="hob[]">Singing&nbsp<input type="checkbox" value="dance" name="hob[]">Dance&nbsp<input type="checkbox" value="cooking" name="hob[]">Coocking</td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Institution Studied</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td align="center"><input type="text" style="border:none;border-bottom:3px solid #000;width:300px" required name="in" placeholder="Enter your Name"></td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Course Studied&nbsp&nbsp&nbsp:</td><td><input type="radio" name="course" value="BCA" id="bca" onclick="check()">BCA&nbsp&nbsp<input type="radio" name="course" value="BSC" id="bsc" onclick="check1()">BSC&nbsp&nbsp<input type="radio" value="BCOM" name="course" onclick="check2()" id="bcom">BCOM&nbsp&nbsp<input type="radio" onclick="check3()" value="BE" name="course" id="be">BE&nbsp&nbsp</td></tr>
<tr><td align="center"><span style="font-family:Baskerville Old Face;font-size:20px">Course Offerred&nbsp&nbsp&nbsp:</td><td align="center"><input type="radio" id="mca" value="mca" name="cn">MCA&nbsp&nbsp<input type="radio" name="cn" value="mba" id="mba">MBA&nbsp&nbsp<input type="radio" name="cn" value="mtech" id="mtech">MTECH&nbsp&nbsp<input type="radio" name="cn" value="msc" id="msc">MSC&nbsp&nbsp</td></tr>
<tr><td align="center"><input type="submit" id="sub" onclick="subfun()" name="submit" style="border:2px solid #000;width:100px;background-color:#ccc;border-radius:50px;height:35px;"></td><td><input type="reset" name="reset" style="border:2px solid #000;width:100px;height:35px;background-color:#ccc;font-size:bold;border-radius:50px"></td></tr>
</table></form>
</center></div>


</body>
</html>