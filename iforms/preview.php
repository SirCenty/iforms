<?php
include_once ('php/header.php');


$loginsql = mysqli_query($conn, "SELECT * FROM users WHERE userid = '".$_SESSION['sess_username']."'");
$values = mysqli_fetch_assoc($loginsql);

$NAME= $values["names"];
$EMAIL= $values["email"];
$PHONE=$values["phone"];
$DESIGNATION=$values["designation"];
$DEPARTMENT=$values["department"];
$USER_ID=$_SESSION['sess_username'];
//$WORK_LOCATION=$_POST["work_location"];
$REQUEST_DATE=$_POST["request_date"];
$EMPLOYEE_NO=$_POST["employee_no"];

//section c type of request
$TYPE_OF_REQUEST= $_POST["type_of_user"];

//section d system acess
//domains
$PAYNET=$_POST["paynet"];
$PAYNETSLAN=$_POST["paynetslan"];
$INTERSWITCH=$_POST["interswitch"];
$INTERSWITCHGROUP=$_POST["interswitchgroup"];

//databases
//oracle
$PRIME=$_POST["prime"];
$ONLINE=$_POST["online"];
$FRAUDGUARD=$_POST["fraudguard"];
$IST=$_POST["ist"];
//sql
$INTSQLSRV=$_POST["intsqlsrv"];
$INTSQLSRV1=$_POST["intsqlsrv1"];
$OFFICE_DB=$_POST["officedb"];
$REALTIME_DB=$_POST["realtimedb"];
$CENCON=$_POST["cencon"];
$ENTSQLSRV=$_POST["entsqlsrv"];

//devices
//router 
$PARTNER_ROUTER=$_POST["partner_router"];
$INTERNET_ROUTER=$_POST["internet_router"];
//firewall
$MERAKI=$_POST["meraki_fw"];
$JUNIPER=$_POST["juniper_fw"];
//acess control
$OFFICE_ACCESS=$_POST["office_access"];
$CDE_ACCESS=$_POST["cde_access"];

//systems
$PASTEL=$_POST["pastel"];
$TERMINAL_SERVER=$_POST["terminal_server"];
$INTRANET=$_POST["intranet"];
$TRANWALL_TC=$_POST["tranwall_tc"];
$PURPOSE=$_POST["purpose"];

?>

<div class="columns medium-12 large-12" style="background-color: #00688B;"> 
	<!--preview side-->
	<form action="" method="POST" >
		<div class="columns medium-8 large-8">
			<label style="color: #fff;padding:1rem;font-size: 1.2rem;text-align: center;"><b><u>PREVIEW FORM</u></b></label>
			
				
				<div class="columns medium-12 large-12">
					<table style="margin-left: auto;margin-right: auto;width: 100%;">
						<tbody>
							<tr>
								<td></td>
								<td  style="background-color:#00425f;text-align: center;color: #fff"><?php echo $TYPE_OF_REQUEST; ?></td>
								<td></td>
							</tr>

						</tbody>
					</table>

<!--SYSTEM ACCESS-->
<table style="margin-left: auto;margin-right: auto;width: 100%;">
	<tbody>
		<tr>
			<td  style="background-color:#00425f;text-align: center;color: #fff">SYSTEM ACCESS</td>
		</tr>
<!--DOMAINS-->
<tr>
	<td  style="background-color:#b6c2f9;text-align: left;color: #000">
	<ul class="columnlist">
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Paynet</p>
	<p style='width: 30%;display:inline;'><b><?php echo $PAYNET;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Paynetslan</p>
	<p style='width: 30%;display:inline;'><b><?php echo $PAYNETSLAN;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Interswitch</p>
	<p style='width: 30%;display:inline;'><b><?php echo $INTERSWITCH;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Interswitchgroup</p>
	<p style='width: 30%;display:inline;'><b><?php echo $INTERSWITCHGROUP;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Prime</p>
	<p style='width: 30%;display:inline;'><b><?php echo $PRIME;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Online</p>
	<p style='width: 30%;display:inline;'><b><?php echo $ONLINE;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Fraudguard</p>
	<p style='width: 30%;display:inline;'><b><?php echo $FRAUDGUARD;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Ist</p>
	<p style='width: 30%;display:inline;'><b><?php echo $IST;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Intsqlsrv</p>
	<p style='width: 30%;display:inline;'><b><?php echo $INTSQLSRV;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Intsqlsrv1</p>
	<p style='width: 30%;display:inline;'><b><?php echo $INTSQLSRV1;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Officedb</p>
	<p style='width: 30%;display:inline;'><b><?php echo $OFFICE_DB;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Realtimedb</p>
	<p style='width: 30%;display:inline;'><b><?php echo $REALTIME_DB;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Cencon</p>
	<p style='width: 30%;display:inline;'><b><?php echo $CENCON;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Entsqlsrv</p>
	<p style='width: 30%;display:inline;'><b><?php echo $ENTSQLSRV;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Partner Router
</p>
	<p style='width: 30%;display:inline;'><b><?php echo $PARTNER_ROUTER;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Internet Router
</p>
	<p style='width: 30%;display:inline;'><b><?php echo $INTERNET_ROUTER;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Meraki</p>
	<p style='width: 30%;display:inline;'><b><?php echo $MERAKI;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Juniper</p>
	<p style='width: 30%;display:inline;'><b><?php echo $JUNIPER;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Pastel</p>
	<p style='width: 30%;display:inline;'><b><?php echo $PASTEL;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Terminal Server
</p>
	<p style='width: 30%;display:inline;'><b><?php echo $TERMINAL_SERVER;?></b></p>
</li>
<li style='border:1px solid black;width:100%;'>
	<p style='width: 70%;border-right:1px solid black;display:inline-block;'>Tranwall TC
</p>
	<p style='width: 30%;display:inline;'><b><?php echo $TRANWALL_TC;?></b></p>
</li>

	</ul>
	</td>
</tr>

<!--PURPOSE-->
<?php if($PURPOSE != ""){
	?>
	<tr>
		<td style="background-color: #b6c2f9;">
			<b><u>PURPOSE</u></b>
				<p><?php echo $PURPOSE; ?></p>
		</td>
	</tr>
	
<?php
};
?>


		
	</tbody>
</table>
				</div>

				
		</div>

		<!--authorizers-->
		<div class="columns medium-4 large-4 clear">
			<label style="color: #fff;padding:1rem;font-size: 1.2rem;text-align: center;"><b><u>Authorizers</u></b></label>
			<p style="color: #fff;">(please choose your authorizers)</p>
			
			<table style="margin-left: auto;margin-right: auto;width: 100%;">
				<tbody>
					<tr style="border-bottom: 1px solid black;">
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 40%;">Line Manager</td>
						<td style="background-color:#00425f;color: #fff;">
							<select name="authlm" required="">
                      			<option value="">Choose Line Manager</option>

<?php
//query for the filter results
$result = DB::query('SELECT * FROM `users` WHERE authorizer = "yes" and line_manager = "yes" ORDER BY id ASC');

foreach ($result as $row) {
	$name = $row['names'];
	$userid = $row['userid'];
	?>
		<option style="width: auto;" value="<?php echo $userid;?>|<?php echo $name;?>"><?php echo $row['names'];?></option>
	<?php
	}
?>
							</select>
			            </td>
					</tr>
					<tr style="border-bottom: 1px solid black;">
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 40%;">Technical</td>
						<td style="background-color:#00425f;color: #fff;">
							<select  name="auth1" required="">
                      			<option value="">Choose Authorizer</option>


<?php
//query for the filter results
$result = DB::query('SELECT * FROM `users` WHERE authorizer = "yes" ORDER BY id ASC');
foreach ($result as $row) {
	$name = $row['names'];
	$userid = $row['userid'];
  ?>

	<option style="width: auto;" value="<?php echo $userid;?>|<?php echo $name;?>"><?php echo $row['names'];?></option>
	<?php
}
?>
							</select>
			            </td>
					</tr>
					<tr style="border-bottom: 1px solid black;">
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 40%;">Security</td>
						<td style="background-color:#00425f;color: #fff;">
							<select  name="auth2" required="">
                      			<option value="">Choose Authorizer</option>


<?php
//query for the filter results
$result = DB::query('SELECT * FROM `users` WHERE authorizer = "yes"  ORDER BY id ASC');

foreach ($result as $row) {
	$name = $row['names'];
	$userid = $row['userid'];
  ?>

						<option style="width: auto;" value="<?php echo $userid;?>|<?php echo $name;?>"><?php echo $row['names'];?></option>
	<?php
}
?>
							</select>
			            </td>
					</tr>
					<tr style="border-bottom: 1px solid black;">
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 40%;">Operations</td>
						<td style="background-color:#00425f;color: #fff;">
							<select  name="auth3" required="">
                      			<option value="">Choose Authorizer</option>


<?php
//query for the filter results
	$result = DB::query('SELECT * FROM `users` WHERE authorizer = "yes" ORDER BY id ASC');

	foreach ($result as $row) {
		$name = $row['names'];
		$userid = $row['userid'];
	 ?>

		<option style="width: auto;" value="<?php echo $userid;?>|<?php echo $name;?>"><?php echo $row['names'];?></option>
	<?php
	}
?>
							</select>
			            </td>
					</tr>
					<tr>
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 40%;">Legal Rep.</td>
						<td style="background-color:#00425f;color: #fff;">
							<select name="auth4" required>
                      			<option value="">Choose Authorizer</option>

<?php
//query for the filter results
$result = DB::query('SELECT * FROM `users` WHERE authorizer = "yes" ORDER BY id ASC');

foreach ($result as $row) {
	$name = $row['names'];
	$userid = $row['userid'];
  ?>

						<option style="width: auto;" value="<?php echo $userid;?>|<?php echo $name;?>"><?php echo $row['names'];?></option>
	<?php
}
?>
							</select>
			            </td>
					</tr>
				</tbody>
			</table>
		</div>



		<div class="columns">
	        <input class="tiny button right" type="Submit" name="form_submit" value="Submit" />
	        <input class="tiny button left" type="button" onclick="history.go(-1);" value="Back" />
	    </div>

<input type="hidden" name="names" value="<?php echo $NAME; ?>">
<input type="hidden" name="emails" value="<?php echo $EMAIL; ?>">
<input type="hidden" name="phone_number" value="<?php echo $PHONE; ?>">
<input type="hidden" name="designation" value="<?php echo $DESIGNATION; ?>">
<input type="hidden" name="department" value="<?php echo $DEPARTMENT; ?>">
<input type="hidden" name="user_id" value="<?php echo $USER_ID; ?>">
<input type="hidden" name="work_location" value="<?php echo $WORK_LOCATION; ?>">
<input type="hidden" name="type_of_user" value="<?php echo $TYPE_OF_REQUEST; ?>">
<input type="hidden" name="request_date" value="<?php echo $REQUEST_DATE; ?>">
<input type="hidden" name="employee_no" value="<?php echo $EMPLOYEE_NO; ?>">
<input type="hidden" name="paynet" value="<?php echo $PAYNET; ?>">
<input type="hidden" name="interswitch" value="<?php echo $INTERSWITCH; ?>">
<input type="hidden" name="paynetslan" value="<?php echo $PAYNETSLAN; ?>">
<input type="hidden" name="interswitchgroup" value="<?php echo $INTERSWITCHGROUP; ?>">
<input type="hidden" name="prime" value="<?php echo $PRIME; ?>">
<input type="hidden" name="online" value="<?php echo $ONLINE; ?>">
<input type="hidden" name="fraudguard" value="<?php echo $FRAUDGUARD; ?>">
<input type="hidden" name="ist" value="<?php echo $IST; ?>">
<input type="hidden" name="intsqlsrv" value="<?php echo $INTSQLSRV; ?>">
<input type="hidden" name="intsqlsrv1" value="<?php echo $INTSQLSRV1; ?>">
<input type="hidden" name="officedb" value="<?php echo $OFFICE_DB; ?>">
<input type="hidden" name="realtimedb" value="<?php echo $REALTIME_DB; ?>">
<input type="hidden" name="cencon" value="<?php echo $CENCON; ?>">
<input type="hidden" name="entsqlsrv" value="<?php echo $ENTSQLSRV; ?>">
<input type="hidden" name="partner_router" value="<?php echo $PARTNER_ROUTER; ?>">
<input type="hidden" name="internet_router" value="<?php echo $INTERNET_ROUTER; ?>">
<input type="hidden" name="meraki_fw" value="<?php echo $MERAKI; ?>">
<input type="hidden" name="juniper_fw" value="<?php echo $JUNIPER; ?>">
<input type="hidden" name="office_access" value="<?php echo $OFFICE_ACCESS; ?>">
<input type="hidden" name="cde_access" value="<?php echo $CDE_ACCESS; ?>">
<input type="hidden" name="pastel" value="<?php echo $PASTEL; ?>">
<input type="hidden" name="terminal_server" value="<?php echo $TERMINAL_SERVER; ?>">
<input type="hidden" name="intranet" value="<?php echo $INTRANET; ?>">
<input type="hidden" name="tranwall_tc" value="<?php echo $TRANWALL_TC; ?>">
<input type="hidden" name="purpose" value="<?php echo $PURPOSE; ?>">

	</form>
</div>

<?php

if (isset($_POST['form_submit'])) {

	$loginsql = mysqli_query($conn, "SELECT * FROM users WHERE userid = '".$_SESSION['sess_username']."'");
	$values = mysqli_fetch_assoc($loginsql);

	$NAME= $values["names"];
	$EMAIL= $values["email"];
	$PHONE=$values["phone"];
	$DESIGNATION=$values["designation"];
	$DEPARTMENT=$values["department"];
	$USER_ID=$_SESSION['sess_username'];
	//$WORK_LOCATION=$_POST["work_location"];
	$REQUEST_DATE=$_POST["request_date"];
	$EMPLOYEE_NO=$_POST["employee_no"];

	//section c type of request
	$TYPE_OF_REQUEST= $_POST["type_of_user"];

	//section d system acess
	//domains
	$PAYNET=$_POST["paynet"];
	$PAYNETSLAN=$_POST["paynetslan"];
	$INTERSWITCH=$_POST["interswitch"];
	$INTERSWITCHGROUP=$_POST["interswitchgroup"];

	//databases
	//oracle
	$PRIME=$_POST["prime"];
	$ONLINE=$_POST["online"];
	$FRAUDGUARD=$_POST["fraudguard"];
	$IST=$_POST["ist"];
	//sql
	$INTSQLSRV=$_POST["intsqlsrv"];
	$INTSQLSRV1=$_POST["intsqlsrv1"];
	$OFFICE_DB=$_POST["officedb"];
	$REALTIME_DB=$_POST["realtimedb"];
	$CENCON=$_POST["cencon"];
	$ENTSQLSRV=$_POST["entsqlsrv"];

	//devices
	//router 
	$PARTNER_ROUTER=$_POST["partner_router"];
	$INTERNET_ROUTER=$_POST["internet_router"];
	//firewall
	$MERAKI=$_POST["meraki_fw"];
	$JUNIPER=$_POST["juniper_fw"];
	//acess control
	$OFFICE_ACCESS=$_POST["office_access"];
	$CDE_ACCESS=$_POST["cde_access"];

	//systems
	$PASTEL=$_POST["pastel"];
	$TERMINAL_SERVER=$_POST["terminal_server"];
	$INTRANET=$_POST["intranet"];
	$TRANWALL_TC=$_POST["tranwall_tc"];
	$PURPOSE=$_POST["purpose"];

	//auths
	//auths 
	$authlm = explode('|', $_POST['authlm']);
	$useridlm = $authlm[0];
	$authlmname = $authlm[1];

	$auth1 = explode('|', $_POST['auth1']);
	$userid1 = $auth1[0];
	$auth1name = $auth1[1];

	$auth2 = explode('|', $_POST['auth2']);
	$userid2 = $auth2[0];
	$auth2name = $auth2[1];

	$auth3 = explode('|', $_POST['auth3']);
	$userid3 = $auth3[0];
	$auth3name = $auth3[1];

	$auth4 = explode('|', $_POST['auth4']);
	$userid4 = $auth4[0];
	$auth4name = $auth4[1];



	$sql = "INSERT INTO `network`(`reqtype`,`names`, `emails`, `phone_number`, `designation`, `department`, `user_id`, `work_location`, `request_date`, `employee_no`,`paynet`, `paynetslan`, `interswitch`, `interswitchgroup`, `prime`, `online`, `fraudguard`, `ist`, `intsqlsrv`, `intsqlsrv1`, `officedb`, `realtimedb`, `cencon`, `entsqlsrv`, `partner_router`, `internet_router`, `meraki_fw`, `juniper_fw`, `office_access`, `cde_access`, `pastel`, `terminal_server`, `intranet`, `tranwall_tc`, `purpose`, `authorizers`, `authlevel`, `authlm`, `auth1`, `auth2`, `auth3`, `auth4`) 
	VALUES 	('$TYPE_OF_REQUEST','$NAME','$EMAIL','$PHONE','$DESIGNATION','$DEPARTMENT','$USER_ID','$WORK_LOCATION',CURRENT_TIMESTAMP,'$EMPLOYEE_NO', '$PAYNET','$PAYNETSLAN','$INTERSWITCH','$INTERSWITCHGROUP','$PRIME','$ONLINE','$FRAUDGUARD','$IST','$INTSQLSRV','$INTSQLSRV1','$OFFICE_DB','$REALTIME_DB','$CENCON','$ENTSQLSRV','$PARTNER_ROUTER', '$INTERNET_ROUTER','$MERAKI','$JUNIPER','$OFFICE_ACCESS','$CDE_ACCESS','$PASTEL','$TERMINAL_SERVER','$INTRANET','$TRANWALL_TC','$PURPOSE','$authlmname, $auth1name, $auth2name, $auth3name, $auth4name', '0', '$useridlm', '$userid1','$userid2','$userid3','$userid4');";


	$notify_authlmsql = mysqli_query($conn, "SELECT DISTINCT network.id as nid, users.names, initials, userid, email, authlm, auth1, auth2, auth3, auth4 FROM users, network WHERE users.names = '".$authlmname."'");
    $notify_values = mysqli_fetch_assoc($notify_authlmsql);

	//notify line mamager
    $message = 'Hi,<br />
				<br />
				An authorization request is pending your approal. Click <a href="http://192.168.253.158/authforms/index.php">HERE</a> to view.';

    require "phpmailer/class.phpmailer.php"; //include phpmailer class
    // Instantiate Class  
    $mail = new PHPMailer();

    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = false;         // Connection with the SMTP does require authorization    
    //$mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "172.16.10.223";  //Gmail SMTP server address
    $mail->Port = 25;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    // Authentication  
    $mail->Username   = "donotreply.ke@interswitchgroup.com"; // Your full Gmail address
    $mail->Password   = "Password123"; 
    // Compose
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'IForms');
    $subject1 = $mail->Subject = "AUTHORIZATION FORM REQUEST (AS LINE Manager)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_values['email'], "Auth Line Manager Name"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);

    
    if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn));
    }

	echo '<script>window.location.href = "requests.php";</script>';
}

include_once ('php/footer.php');
?>