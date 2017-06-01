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
VALUES  ('centy', '$TYPE_OF_REQUEST','$NAME','$EMAIL','$PHONE','$JOB_TITLE','$DEPARTMENT','$USER_ID','$WORK_LOCATION',CURRENT_TIMESTAMP,'$EMPLOYEE_NO', '$PAYNET','$PAYNETSLAN','$INTERSWITCH','$INTERSWITCHGROUP','$PRIME','$ONLINE','$FRAUDGUARD','$IST','$INTSQLSRV','$INTSQLSRV1','$OFFICE_DB','$REALTIME_DB','$CENCON','$EXTSQLSRV','$ROUTER','$NETWORK_SWITCH','$FIREWALL','$ACCESS_CONTROL','$PASTEL','$TERMINAL_SERVER','$INTRANET','$TRANWALL_TC','$OTHER','$PURPOSE','$auth1name, $auth2name, $auth3name, $auth4name','$initials1','$initials2','$initials3','$initials4');
"; 

    if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn));
    }

echo '<script>window.location.href = "requests.php";</script>';
}

?>