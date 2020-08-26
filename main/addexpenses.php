<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveexpense.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Expenses</h4></center>
<hr>
<div style="text-align:left;">
<div id="ac">
<span>Date: <br></span><input type="date" style="width:265px; height:30px;" name="date" placeholder="MM/DD/YYYY" /><br>
<span>Item: </span><input type="text" style="width:265px; height:30px;" name="item" /><br>
<span>Amount : </span><input type="text" style="width:265px; height:30px;" name="amount" /><br>

<span>Remarks:<br> </span><input type="text" style="width:265px; height:30px;" name="remarks" /><br>
<span>&nbsp;</span><input id="btn" type="submit" value="save" />
</div>
</div>
</form>