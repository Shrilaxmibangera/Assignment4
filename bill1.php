<?php
if(isset($_POST["submit"]))
{
    $iname=$_POST["txt2"];
    $price=$_POST["txt3"];
    $icode=$_POST["txt4"];
    $qty=$_POST["txt5"];
    $date=date("d:M:Y");
    $tamount=$price*$qty;
    echo "<center><table cellpadding=10 border=1 style=background-color:#ccc;margin-top:150px>
    <tr style=background-color:gray><th>ItemName</th><th>Item Price</th><th>Item Code</th><th>Quantity</th><th>Date Of Purchase</th><th>Total Amount</th></tr>
    <tr><td>$iname</td><td>$price</td><td>$icode</td><td>$qty</td><td>$date</td><td>Rs.$tamount</td></tr>
    </table><br><h1>Thank You For Shopping</h1><button>Continue Shopping</button></center>";
}

?>