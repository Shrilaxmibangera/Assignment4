<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    function itemdiv(val)
    {
        var value1=val;
        if(value1=="Pencil")
        {
            document.getElementById("tbl").style.display="inline-block";
            document.getElementById("slno").value="I101";
            document.getElementById("name").value=value1;
            document.getElementById("price").value=10;
            document.getElementById("code").value="I1101";

        }
        else if(value1=="Pen")
        {
            document.getElementById("tbl").style.display="inline-block";
            document.getElementById("slno").value="I101";
            document.getElementById("name").value=value1;
            document.getElementById("price").value=20;
            document.getElementById("code").value="I1102";
        }
        else
        {
            document.getElementById("tbl").style.display="inline-block";
            document.getElementById("slno").value="I101";
            document.getElementById("name").value=value1;
            document.getElementById("price").value=50;
            document.getElementById("code").value="I1102";
        }
    }
    </script>
</head>
<body>
    <form action="bill1.php" method="POST">
        <h1>Please Select Your Items:</h1>
        <select name="item" onchange="itemdiv(this.value)" style="padding:5px;">
        <option value="Pencil" id="pencil">Pencil</option>
        <option value="Pen" id="pen" >Pen</option>
        <option value="Book" id="book">Book</option>
        </select><br><br>    
        <table border=1 id="tbl" cellpadding="10" name="table" style="display:none;background-color:#ccc">
                <tr><th>Description</th><th>Values</th></tr>
                <tr><td>SLNO.</td><td><input type="text" readonly="true" id="slno"  name="txt1"></td></tr>
                <tr><th>Item name:</th><td><input type="text" readonly="true" id="name"  name="txt2"></td></tr>
                <tr><th>Item Price</th><td><input type="text" readonly="true" id="price"  name="txt3"></td></tr>
                <tr><th>Item Code</th><td><input type="text" readonly="true"  id="code" name="txt4"></td></tr>
                <tr><th>Quantity:</th><td><input type="text" required  id="qty" name="txt5"></td></tr>
                </table><br><br>
        <button type="submit" name="submit" value="submit">Submit</button><br><br>
    </form>
</body>
</html>