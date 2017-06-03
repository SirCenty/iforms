<?php 
//section b request for(filling in information for the staff requiring acess)
//if (isset($_POST['preview'])){
$NAME= $_POST["names"];
$EMAIL= $_POST["emails"];
$PHONE=$_POST["phone_number"];
$JOB_TITLE=$_POST["job_title"];
$DEPARTMENT=$_POST["department"];
$USER_ID=$_POST["current_user_id"];
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
$REALTIME_DB=$_POST["realimedb"];
$CENCON=$_POST["cencon"];
$EXTSQLSRV=$_POST["extsqlsrv"];

//devices
//router 
$ROUTER=$_POST["router"];
//network_switch
$NETWORK_SWITCH=$_POST["network_switch"];
//firewall
$FIREWALL=$_POST["firewall"];
//acess control
$ACCESS_CONTROL=$_POST["access_control"];

//systems
$PASTEL=$_POST["pastel"];
$TERMINAL_SERVER=$_POST["terminal_server"];
$INTRANET=$_POST["intranet"];
$TRANWALL_TC=$_POST["tranwall_tc"];
$OTHER=$_POST["other"];
$PURPOSE=$_POST["purpose"];

?>

<?php
include_once ('php/header.php');
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

							<!--Names-->
							<?php if($NAME != ""){
								?>
								<tr style="background-color:#d0d0d0;">
									<td>NAME</td>
									<td>EMAIL</td>
									<td>PHONE</td>
								</tr>
								<tr>
									<td><?php echo $NAME; ?></td>
									<td><?php echo $EMAIL; ?></td>
									<td><?php echo $PHONE; ?></td>
								</tr>
							<?php
							};
							?>
								
								
							<!--job details-->
							<?php if(($JOB_TITLE != "") || ($DEPARTMENT != "") || ($USER_ID != "")){
								?>
								<tr style="background-color:#d0d0d0;">
									<td>JOB TITLE</td>
									<td>DEPARTMENT</td>
									<td>USER ID</td>
								</tr>
								<tr>
									<td><?php echo $JOB_TITLE; ?></td>
									<td><?php echo $DEPARTMENT; ?></td>
									<td><?php echo $USER_ID; ?></td>
								</tr>
							<?php
							};
							?>
							
							<!--LOCATION-->
							<?php if(($WORK_LOCATION != "") || ($REQUEST_DATE != "") || ($EMPLOYEE_NO != "")){
								?>
								<tr style="background-color:#d0d0d0;">
									<td>LOCATION</td>
									<td>REQUEST DATE</td>
									<td>EMPLOYEE NO</td>
								</tr>
								<tr>
									<td><?php echo $WORK_LOCATION; ?></td>
									<td><?php// echo $REQUEST_DATE; ?></td>
									<td><?php echo $EMPLOYEE_NO; ?></td>
								</tr>
							<?php
							};
							?>
							
						</tbody>
					</table>

<!--SYSTEM ACCESS-->
<table style="margin-left: auto;margin-right: auto;width: 100%;">
	<tbody>
		<tr>
			<td  style="background-color:#00425f;text-align: center;color: #fff">SYSTEM ACCESS</td>
		</tr>
<!--DOMAINS-->
	<?php if(($PAYNET != "") || ($PAYNETSLAN != "") || ($INTERSWITCH != "") || ($INTERSWITCHGROUP != "")){
		?>
		<tr style="background-color:#d0d0d0;">
			<td style="width: 30%">DOMAINS</td>
		</tr>
		<tr>
			<td><?php echo $PAYNET." ".$PAYNETSLAN." ".$INTERSWITCH." ".$INTERSWITCHGROUP; ?></td>
		</tr>
	<?php
	};
	?>

<!--DATABASES-->
	<?php if(($PRIME != "") || ($ONLINE != "") || ($FRAUDGUARD != "") || ($IST != "") || ($INTSQLSRV != "") || ($INTSQLSRV1 != "") || ($OFFICE_DB != "") || ($REALTIME_DB != "") || ($CENCON != "") || ($EXTSQLSRV != "")){
		?>
		<tr style="background-color:#d0d0d0;">
			<td>DATABASES</td>
		</tr>

		<?php if(($PRIME != "") || ($ONLINE != "") || ($FRAUDGUARD != "") || ($IST != "")){
				?>
			<tr>
				<td><strong><u>ORACLE</u></strong></td>
			</tr>
			<tr>
				<td><?php echo $PRIME." ".$ONLINE." ".$FRAUDGUARD." ".$IST; ?></td>
			</tr>
		<?php
		};
		?>

		<?php if(($INTSQLSRV != "") || ($INTSQLSRV1 != "") || ($OFFICE_DB != "") || ($REALTIME_DB != "") || ($CENCON != "") || ($EXTSQLSRV != "")){
			?>
			<tr>
				<td><strong><u>SQL</u></strong></td>
			</tr>
			<tr>
				<td><?php echo $INTSQLSRV." ".$INTSQLSRV1." ".$OFFICE_DB." ".$REALTIME_DB." ".$CENCON." ".$EXTSQLSRV; ?></td>
			</tr>
		<?php
		};
		?>
		
	<?php
	};
	?>


<!--DEVICES-->
<?php if(($ROUTER != "") || ($FIREWALL != "") || ($ACCESS_CONTROL != "") || ($NETWORK_SWITCH != "")){
		?>
	<tr style="background-color:#d0d0d0;">
		<td>DEVICES</td>
	</tr>
	<tr>
		<td><?php echo $ROUTER." ".$FIREWALL." ".$ACCESS_CONTROL." ".$NETWORK_SWITCH; ?></td>
	</tr>
<?php
};
?>

<!--SYSTEMS-->
<?php if(($TERMINAL_SERVER != "") || ($PASTEL != "") || ($INTRANET != "") || ($TRANWALL_TC != "")){
	?>
	<tr style="background-color:#d0d0d0;">
		<td>SYSTEMS</td>
	</tr>
	<tr>
		<td><?php echo $TERMINAL_SERVER." ".$PASTEL." ".$INTRANET." ".$TRANWALL_TC; ?></td>
	</tr>	
<?php
};
?>

<!--OTHERS-->
<?php if($OTHER != ""){
	?>
	<tr style="background-color:#d0d0d0;">
		<td>OTHERS</td>
	</tr>
	<tr>
		<td><?php echo $OTHER; ?></td>
	</tr>
	
<?php
};
?>

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
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 15%;">Auth1</td>
						<td style="background-color:#00425f;color: #fff;">
							<input style="width: auto;" type="radio" name="auth1" value="VO|Vincent Omondi" required="">Vincent Omondi</br>
			                <input style="width: auto;" type="radio" name="auth1" value="JD|John Doe">John Doe</br>
			                <input style="width: auto;" type="radio" name="auth1" value="SO|Sylver Omondi">Sylver Omondi</br>
			            </td>
					</tr>
					<tr style="border-bottom: 1px solid black;">
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 15%;">Auth2</td>
						<td style="background-color:#00425f;color: #fff;">
							<input style="width: auto;" type="radio" name="auth2" value="VO|Vincent Omondi" required="">Vincent Omondi</br>
			                <input style="width: auto;" type="radio" name="auth2" value="JD|John Doe">John Doe</br>
			            </td>
					</tr>
					<tr style="border-bottom: 1px solid black;">
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 15%;">Auth3</td>
						<td style="background-color:#00425f;color: #fff;">
							<input style="width: auto;" type="radio" name="auth3" value="VO|Vincent Omondi" required="">Vincent Omondi</br>
			                <input style="width: auto;" type="radio" name="auth3" value="JD|John Doe">John Doe</br>
			            </td>
					</tr>
					<tr>
						<td style="background-color:#00425f;color: #fff;border-right: 1px solid black;margin-right: 0px;width: 15%;">Auth4</td>
						<td style="background-color:#00425f;color: #fff;">
							<input style="width: auto;" type="radio" name="auth4" value="VO|Vincent Omondi" required="">Vincent Omondi</br>
			                <input style="width: auto;" type="radio" name="auth4" value="JD|John Doe">John Doe</br>
			            </td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="columns">
			        <input class="tiny button right" type="Submit" name="form_submit" value="Submit" />
			        <input class="tiny button left" onclick="history.go(-1);" value="Back">
			    </div>
	</form>
</div>

<?php

if (isset($_POST['form_submit'])) {
$NAME=$_POST["names"];
$EMAIL;
$PHONE;
$JOB_TITLE;
$DEPARTMENT;
$USER_ID;
//$WORK_LOCATION;
$REQUEST_DATE;
$EMPLOYEE_NO;

//section c type of request
$TYPE_OF_REQUEST;

//section d system acess
//domains
$PAYNET;
$PAYNETSLAN;
$INTERSWITCH;
$INTERSWITCHGROUP;

//databases
//oracle
$PRIME;
$ONLINE;
$FRAUDGUARD;
$IST;
//sql
$INTSQLSRV;
$INTSQLSRV1;
$OFFICE_DB;
$REALTIME_DB;
$CENCON;
$EXTSQLSRV;

//devices
//router 
$ROUTER;
//network_switch
$NETWORK_SWITCH;
//firewall
$FIREWALL;
//acess control
$ACCESS_CONTROL;

//systems
$PASTEL;
$TERMINAL_SERVER;
$INTRANET;
$TRANWALL_TC;
$OTHER;
$PURPOSE;



	$auth1 = explode('|', $_POST['auth1']);
    $initials1 = $auth1[0];
    $auth1name = $auth1[1];

    $auth2 = explode('|', $_POST['auth2']);
    $initials2 = $auth2[0];
    $auth2name = $auth2[1];

    $auth3 = explode('|', $_POST['auth3']);
    $initials3 = $auth3[0];
    $auth3name = $auth3[1];

    $auth4 = explode('|', $_POST['auth4']);
    $initials4 = $auth4[0];
    $auth4name = $auth4[1];



$sql = "INSERT INTO `network`(`user`, `reqtype`,`names`, `emails`, `phone_number`, `job_title`, `department`, `current_user_id`, `work_location`, `request_date`, `employee_no`,`paynet`, `paynetslan`, `interswitch`, `interswitchgroup`, `prime`, `online`, `fraudguard`, `ist`, `intsqlsrv`, `intsqlsrv1`, `officedb`, `realimedb`, `cencon`, `extsqlsrv`, `router`, `network_switch`, `firewall`, `access_control`, `pastel`, `terminal_server`, `intranet`, `tranwall_tc`, `other`, `purpose`, `authorizers`, `auth1`, `auth2`, `auth3`, `auth4`) 
VALUES 	('centy', '$TYPE_OF_REQUEST','$NAME','$EMAIL','$PHONE','$JOB_TITLE','$DEPARTMENT','$USER_ID','$WORK_LOCATION',CURRENT_TIMESTAMP,'$EMPLOYEE_NO', '$PAYNET','$PAYNETSLAN','$INTERSWITCH','$INTERSWITCHGROUP','$PRIME','$ONLINE','$FRAUDGUARD','$IST','$INTSQLSRV','$INTSQLSRV1','$OFFICE_DB','$REALTIME_DB','$CENCON','$EXTSQLSRV','$ROUTER','$NETWORK_SWITCH','$FIREWALL','$ACCESS_CONTROL','$PASTEL','$TERMINAL_SERVER','$INTRANET','$TRANWALL_TC','$OTHER','$PURPOSE','$auth1name, $auth2name, $auth3name, $auth4name','$initials1','$initials2','$initials3','$initials4');
"; 

    if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn));
    }

echo '<script>window.location.href = "requests.php";</script>';
}

include_once ('php/footer.php');
?>