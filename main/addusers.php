<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveuser.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add User</h4></center>
<hr>
<div id="ac">
<span>Username: </span><input type="text" style="width:265px; height:30px;" name="username" ><br>
<span>Password: </span><input type="text" style="width:265px; height:30px;" name="password" Required/><br>
<span>Position: </span>
<select name="position"  style="width:265px; height:30px; margin-left:-5px;" >
<option value="None">Select position</option>
<option value="admin">Admin</option>
<option value="processing assistant">processing assistant</option>	

</select><br>
<span>Branch Name: </span>
<select name="branch_name"  style="width:265px; height:30px; margin-left:-5px;" >
<option value="Minakulu">Minakulu</option>
<option value="Chopelow">Chopelow</option>
<option value="Aredu">Aredu</option>
<option value="Kigumba Annex">Kigumba Annex</option>
<option value="Gulu">Gulu</option>
<option value="Layibi">Layibi</option>	
<option value="Soroti">Soroti</option>	
<option value="Namanve">Namanve</option>	
<option value="Minakulu Annex">Minakulu Annex</option>	
<option value="Bweyale">Bweyale</option>	
</select><br>



<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
