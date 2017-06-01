<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="utf-8">
<title>interswitch authorization</title>
</head>

<body class="body">
<img src="interswitchngnew.png">
<h1 class="h1"> WELCOME </h1>
<p> NETWORK ACCESS AUTHORIZATION FORM</p></br>
<Script>
    function validateForm() {
        var fields=["name","emails","phone_number","title","department","current_user_id","workstation_location","request_date","employee"]
        var i, l = fields.length;

        var fieldname;
        for (i = 0; i < l; i++) {
            fieldname = fields[i];
            if (document.forms["form"][fieldname].value === "") {
                alert(fieldname + " can not be empty");
                return false;
            }
        }

        return false;
    }

</script>
	<form name="form" class="form" action="form_data_collector.php" method="POST" onsubmit="validateForm()">
	
	
	<?php /*?>section b start here<?php */?>
	<div class="div">
	<div class="div2" >SECTION B - REQUESTED FOR:(FILLING IN INFORMATION FOR THE STAFF REQUIRING ACCESS)</div>
	<div class="div3">
	<table cellpadding="8" border="3" cellspacing="10"  width="50" align="center" >
	<tbody>
	<tr >
	<td>NAME:<input type="text" name="names" id="names"></td>
	<td>EMAIL:<input type="text" name="emails" id="emails"> </td>
	<td>PHONE:<input type="text" name="phone_number" id="phone_number"></td>
	</tr>
	<tr>
	<td>TITLE:<input type="text" name="title"></td> 
	<td>DEPARTMENT:<input type="text" name="department"></td> 
	<td> USER ID:<input type="text" name="current_user_id"></td>
	</tr>
	<tr>
	<td>LOCATION:<input type="text" name="workstation_location" VALUE="ORBIT PLACE"></td>
	<td>REQUEST DATE<input type="date" name="request_date"></td> 
	<td>EMPLOYEE<input type="text" name="employee"></td>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
  
  
  
   <?php /*?>section c start here<?php */?>
    <div class="div">
    <diV class="div2"> SECTION C- TYPE OF REQUEST</diV>
		<P align="center">
		<input type="radio" name="type_of_user" value="NEW USER" > NEW USER &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<input type="radio" name="type_of_user" value="UPDATE/MODIFY USER">UPDATE/MODIFY USER  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<input type="radio" name="type_of_user" value="TEMPORARY ACCESS">TEMPORARY ACCESS  </P>
   </div>
   
   
   
   <?php /*?>section d start here<?php */?>
	<div class="div" style="overflow-x:auto "><diV class="div2"> SECTION D- SYSTEM ACESS</diV>
		<table  border="3" class="table" cellspacing="5" width="100%">

		
		
		<!-- DOMAIN SECTION START HERE-->
		<tr >

			<th class="th" align="center" colspan="6" bgcolor="#00bfff" > DOMAINS</th>
			<tr>
				<td > PAYNET &nbsp;admin<input type="radio" name="domains" value="paynet admin">&nbsp;user<input type="radio" name="domains" value="paynet user"></td>
				<td > INTERSWITCH &nbsp;admin<input type="radio" name="domains" value="interswitchn admin">&nbsp;user<input type="radio" name="domains" value="interswitch user"></td>
				<td colspan="2" > PAYNETSLAN &nbsp;admin<input type="radio" name="domains" value="paynetslan admin">&nbsp;user<input type="radio" name="domains" value="paynetslan user"></td>
				<td colspan="2"> INTERSWITCHGROUP &nbsp;admin<input type="radio" name="domains" value=" interswitchgroup admin">&nbsp;user<input type="radio" name="domains" value="interswitchgroup user"></td>
			</tr>
		</tr> 
		
		
		<!-- DATABASE SECTION START HERE-->
		<tr> 
			<th  align="center" colspan="6"  bgcolor="#00bfff" > DATABASES</th>
			<tr>
				<th bgcolor="#7fffd4">ORACLE</th>
		<tr>
		<td>PRIME &nbsp;admin<input type="radio" name="oracle" value=" prime admin">&nbsp;user<input type="radio" name="oracle" value="prime user"></td>
		<td >ONLINE &nbsp;admin<input type="radio" name="oracle" value="online admin">&nbsp;user<input type="radio" name="oracle" value="online user"></td>
		<td colspan="2">FRAUDGUARD &nbsp;admin<input type="radio" name="oracle" value="fraudguard admin">&nbsp;user<input type="radio" name="oracle" value="fraudguard user"></td>
		<td colspan="2">IST &nbsp;admin<input type="radio" name="oracle" value="ist admin">&nbsp;user<input type="radio" name="oracle" value="ist user"></td>
		</tr>
				<th bgcolor="#7fffd4">SQL</th>
				<tr>
		<td>INTSQLSRV &nbsp;admin<input type="radio" name="sql" value="INTSQLSRV admin">&nbsp;user<input type="radio" name="sql" value="INTSQLSRV user"></td>
		<td colspan="2">INTSQLSRV1 &nbsp;admin<input type="radio" name="sql" value="INTSQLSRV1 admin">&nbsp;user<input type="radio" name="sql" value="INTSQLSRV1 user"></td>
		<td colspan="2">OFFICE DB-LIVE &nbsp;admin<input type="radio" name="sql" value="OFFICE DB-LIVE admin">&nbsp;user<input type="radio" name="sql" value="OFFICE DB-LIVE user"></td>
                </tr>
            <tr>
		<td>REALTIME-DB-LIVE &nbsp;admin<input type="radio" name="sql" value="REALTIME-DB-LIVE admin">&nbsp;user<input type="radio" name="sql" value="REALTIME-DB-LIVE user"></td>
		<td colspan="2">CENCON &nbsp;admin<input type="radio" name="sql" value="CENCON admin">&nbsp;user<input type="radio" name="sql" value="CENCON user"></td>
		<td colspan="2">EXTSQLSRV &nbsp;admin<input type="radio" name="sql" value="EXTSQLSRV admin">&nbsp;user<input type="radio" name="sql" value="EXTSQLSRV user"></td>
		</tr>
			</tr>
		</tr>
		
		
		<!-- DEVICES SECTION START HERE-->
		<tr>
			<th  align="center" colspan="6"  bgcolor="#00bfff"> DEVICES</th>
			
			
<tr>
	<td >ROUTER &nbsp; PARTNER ROUTER<input type="radio" name="router" value="partner_router">&nbsp; INTERNET ROUTER<input type="radio" name="router" value="internet_router">
	<td >NETWORK SWITCH &nbsp; <input type="text" name="network_switch" >
  <td colspan="2">FIREWALL &nbsp; MERAKI<input type="radio" name="firewall" value="FIREWALL:meraki">&nbsp; JUNIPER<input type="radio" name="firewall" value="FIREWALL:juniper">
  <td >ACESS CONTROL &nbsp; OFFICE<input type="radio" name="Acess_control" value="ACESS CONTROL:office">&nbsp; CDE<input type="radio" name="Acess_control" value="ACESS CONTROL:CDE">
	  </td>
	
</tr>
			
		</tr> 
		
		
		<!-- SYSTEM SECTION START HERE-->
		<tr>
			<th  align="center" colspan="6"  bgcolor="#00bfff">SYSTEMS</th>
			<tr>
				<td>PASTEL &nbsp; <input type="text" name="systems"></td>
				<td>TERMINAL SERVER &nbsp; <input type="text" name="terminal_server"></td>
				<td>WAGEPOINT &nbsp; <input type="text" name="wagepoint"></td>
				<td>CENCON &nbsp; <input type="text" name="cencon"></td>
				<td>INTRANET &nbsp; <input type="text" name="intranet"></td>
			</tr>
		</tr>
		<tr>
			<div class="div4"><th>OTHER SYSTEM (list other system if not indicated above)</th></div>
			<td colspan="5"><textarea rows="9" cols="50" name="other"></textarea></td>
			
		</tr>
		
		
		</table>
</div>
<div align="center"><input type="image"img src="Submit.png" width="200"> &nbsp;&nbsp; <input type="image"src="reset.png" width="200" height="53" )"></div>
	</form>


<?php
include "footer.php";
?>


</body>
</html>