<?php
require("log.php");
include("header.html");
?>
<table id="inputData" border=1>
	<tr><th colspan=2>Expense Information</th></tr>
	<tr><td>Expense Name:</td><td><input type="text" name="dest" value="staff saliery"/></td></tr>
	<tr><td>Expense Cost:</td><td><input type="text" name="dest" value="100000"/></td></tr>
	<tr><th colspan=2><input type="submit" value="submit"/></th></tr>
</table>

<?php
include("footer.html");
?>
