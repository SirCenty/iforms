<?php
include_once ('php/header.php');
?>


<div class="columns medium-12 large-12" style="background-color: #00688B;">
    
<label style="color: #fff;padding:0.9rem;font-size: 1.2rem;text-align: left;"><b><u>My Request Forms</u></b></label>
			<table  style="margin-left: auto;margin-right: auto;width:98%;zoom:85%;">
            <thead>
              <tr style="background-color:#00425f;border: 1px solid black;">
                <th style="font-size:0.9rem;color: #fff;border: 1px solid black;">No.</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;">Type of Request</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;width: 50%;">System Access</th>
                <th style="font-size:0.9rem;color: #fff;">Line Manager</th>
                <th style="font-size:0.9rem;color: #fff;">Auth1</th>
                <th style="font-size:0.9rem;color: #fff;">Auth2</th>
                <th style="font-size:0.9rem;color: #fff;">Auth3</th>
                <th style="font-size:0.9rem;color: #fff;">Auth4</th>
                <th style="font-size:0.9rem;color: #fff;border-left: 1px solid black;text-align: center;">Access Granted</th>
              </tr>

<?php
//query for the filter results
$result = DB::query('SELECT * FROM `network` WHERE current_user_id = "'.$_SESSION['sess_username'].'" ORDER BY id DESC ');

foreach ($result as $row) {
  $id = $row['id'];
  ?>


<tr>
<td style="font-size:0.9rem;border: 1px solid black;"><?php echo $row['id']; ?></td>
<td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['reqtype']; ?></td>
<td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;">
<?php

/*
$req_result = DB::query('SELECT * FROM `systems`');

foreach ($req_result as $rowq) {
  $req_name = $rowq['name'];

$paynet = explode(" ", $row['paynet']);
$pay1 = $paynet[0];
$pay2 = $paynet[1];


echo "<ul class='columnlist'> 
<li><p style='font-size:0.8rem;margin:0px;'>" . $row['paynet'] . "</p></li>
</ul>";
}*/
/*
$paynet = explode(" ", $row['paynet']);
$pay1 = $paynet[0];
$pay2 = $paynet[1];
*/

echo "<ul class='columnlist'>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Paynet <b>" . $row['paynet'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Interswitch <b>" . $row['interswitch'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Paynetslan <b>" . $row['paynetslan'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Interswitchgroup <b>" . $row['interswitchgroup'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Prime <b>" . $row['prime'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Online <b>" . $row['online'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Fraudguard <b>" . $row['fraudguard'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>IST <b>" . $row['ist'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Intsqlsrv <b>" . $row['intsqlsrv'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Intsqlsrv1 <b>" . $row['intsqlsrv1'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Office-DB <b>" . $row['officedb'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Realtime-DB <b>" . $row['realtimedb'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Cencon <b>" . $row['cencon'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Entsqlsrv <b>" . $row['entsqlsrv'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Partner router <b>" . $row['parter_router'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Internet router <b>" . $row['internet_router'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Meraki <b>" . $row['meraki_fw'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Juniper <b>" . $row['juniper_fw'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Office Access <b>" . $row['office_access'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>CDE Access <b>" . $row['cde_access'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Pastel <b>" . $row['pastel'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Terminal Server <b>" . $row['terminal_server'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Intranet <b>" . $row['intranet'] . "</b></p></li>
<li style='border:1px solid black;'><p style='font-size:0.8rem;margin:0px;'>Tranwall TC <b>" . $row['tranwall_tc'] . "</b></p></li>
</ul>"; ?></br>
    <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
    </td>

<?php
    if($row['a0'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['authlm'].'</p></td>';
    } else {
        if ($row['a0'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['authlm'].'</p></td>';
        } else if ($row['a0'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['authlm'].'</p></td>';
        }
    };
?>


<?php
    if($row['a1'] === NULL) {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth1'].'</p></td>';
    } else {
    	if ($row['a1'] == 'no') {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth1'].'</p></td>';
    	} else if ($row['a1'] == 'yes')  {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth1'].'</p></td>';
    	}
    };
?>

<?php
    if($row['a2'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth2'].'</p></td>';
    } else {
        if ($row['a2'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth2'].'</p></td>';
        } else if ($row['a2'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth2'].'</p></td>';
        }
    };
?>

<?php
    if($row['a3'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth3'].'</p></td>';
    } else {
        if ($row['a3'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth3'].'</p></td>';
        } else if ($row['a3'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth3'].'</p></td>';
        }
    };
?>

<?php 
    if($row['a4'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth4'].'</p></td>';
    } else {
        if ($row['a4'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth4'].'</p></td>';
        } else if ($row['a4'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth4'].'</p></td>';
        }
    };
?>


<?php
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='id' value= '" .$id . "' />";
    if($row['a4'] === NULL || $row['a4'] == 'no') {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;border-left: 1px solid black;"><button class="radius" style="font-size:0.9rem;margin:auto;">NOT DONE</button></td>';
    } else {
        if ($row['access_granted'] != NULL) {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;border-left: 1px solid black;"><button class="radius" style="font-size:0.9rem;margin:auto;background-color:#0b8036;" disabled>DONE</button></td>';
        } else {
            if ($row['a4'] == 'yes' && $row['authlevel'] == '5') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;border-left: 1px solid black;"><button class="radius" name="done" type="submit" style="font-size:0.8rem;margin:auto;background-color:#083e1c;padding:0.5rem;">Click Me if Implemented</button></td>';
            }
        }
      
    }
    echo "</form>";
?>

</tr>

<?php
}
?>
        </thead>
    </table>
</div>

<?php

if(isset($_POST['done'])){

  $id = $_POST['id'];
  $sql = "UPDATE `network` SET access_granted= CURRENT_TIMESTAMP WHERE id = '" . $id . "'";               
  if (!mysqli_query($conn,$sql)) {die('Error: ' . mysqli_error($conn));
      }
      //page redirect after posting
      echo '<script>window.location.href = "requests.php";</script>';
};

include_once ('php/footer.php');
?>