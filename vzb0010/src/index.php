<?php
    require("dbconn.php");
?>
<html>
<head>
<title>COMP 6120 Database Term Project</title>
</head>

<script type="text/javascript">
</script>

<body bgcolor="#C0C0C0">

<tr>
  <td align="center"><font size="6">Database Query </font></td>
</tr>
</table>
&nbsp;
<FORM METHOD="LINK" ACTION="books.php">
<INPUT TYPE="submit" VALUE="Books">
</FORM>
<FORM METHOD="LINK" ACTION="suppliers.php">
<INPUT TYPE="submit" VALUE="Suppliers">
</FORM>
<FORM METHOD="LINK" ACTION="subjects.php">
<INPUT TYPE="submit" VALUE="Subjects">
</FORM>
<FORM METHOD="LINK" ACTION="customers.php">
<INPUT TYPE="submit" VALUE="Customers">
</FORM>
<FORM METHOD="LINK" ACTION="orders.php">
<INPUT TYPE="submit" VALUE="Orders">
</FORM>
<FORM METHOD="LINK" ACTION="employees.php">
<INPUT TYPE="submit" VALUE="Employees">
</FORM>
<FORM METHOD="LINK" ACTION="shippers.php">
<INPUT TYPE="submit" VALUE="Shippers">
</FORM>
<FORM METHOD="LINK" ACTION="orderdetails.php">
<INPUT TYPE="submit" VALUE="OrderDetails">
</FORM>

<form name="input" action="result.php" method="post">
<br><br>
<font size="4">


<p> <font color="blue">Please Input your SQL Statement here:</font></p> 
</font>
<textarea name="querybox" rows="8" cols="66" > 
</textarea>
<img align="left" src="dbsearch.jpg" width="140" height="134" align="middle">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" value="Submit" align="center">
<input type="reset" value="Reset" align="center">
</form> 



</body>
</html>


