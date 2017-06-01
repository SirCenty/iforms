<?php
include_once ('php/header.php');
?>


<div class="columns medium-12 large-12" style="background-color: #00688B;">
    
<label style="color: #fff;padding:0.9rem;font-size: 1.2rem;text-align: left;"><b><u>Approve?</u></b></label>
			<table  style="margin-left: auto;margin-right: auto;" width="98%">
            <thead>
              <tr style="background-color:#00425f;border: 1px solid black;">
                <th style="font-size:0.9rem;color: #fff;border: 1px solid black">No.</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;">Type of Request</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;">Requested By</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;width: 65%;">System Access</th>
                <th style="font-size:0.9rem;color: #fff;">Status</th>
              </tr>



<?php
//query for the filter results
$result = DB::query('SELECT * FROM `network` WHERE auth2 = "VO"  and a1 = "yes" ORDER BY id DESC ');

foreach ($result as $row) {
  $id = $row['id'];
  ?>


<tr>
<th style="font-size:0.9rem;border: 1px solid black"><?php echo $row['id']; ?></th>
<th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['reqtype']; ?></th>
<th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['names']; ?></th>
<td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php 
                                        echo "<ul class='columnlist'> 
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['paynet'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['interswitch'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['paynetslan'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['interswitchgroup'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['prime'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['online'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['fraudguard'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['ist'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['intsqlsrv'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['intsqlsrv1'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['officedb'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['realtimedb'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['cencon'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['entsqlsrv'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['router'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['firewall'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['access_control'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['network_switch'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['pastel'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['terminal_server'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['intranet'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['tranwall_tc'] . "</p></li>
                                        <li><p style='font-size:0.8rem;margin:0px;'>" . $row['other'] . "</p></li>
                                        </ul>"; ?></br>
    <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
    </td>

<td style="font-size:0.9rem;border-bottom: 1px solid black">
<?php
    echo "<form action='' method='post'>";
      echo "<input type='hidden' name='id' value= '" .$id . "' />";
    if(empty($row['a2'])) {
      echo '<button name="approve" type="submit" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
      echo '<button name="decline" type="submit" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
    } else {
        if ($row['a2'] == 'no') {
            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;" disabled>Declined</button>';
        } else {
            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;" disabled>Approved</button>';
        }
      
    }
    echo "</form>";
?>
</td>
</tr>


    <?php echo "<input type='hidden' name='id' value= '" .$id . "' />"; ?>

<?php
}
?>
              

              
            </thead>

</div>

<?php

if(isset($_POST['approve'])){

  $id = $_POST['id'];
  $sql = "UPDATE `network` SET a2= 'yes' WHERE id = '" . $id . "'";               
  if (!mysqli_query($conn,$sql)) {die('Error: ' . mysqli_error($conn));
      }
      //page redirect after posting
      echo '<script>window.location.href = "a2requests.php";</script>';
};

if(isset($_POST['decline'])){

  $id = $_POST['id'];
  $sql = "UPDATE `network` SET a2= 'no' WHERE id = '" . $id . "'";               
  if (!mysqli_query($conn,$sql)) {die('Error: ' . mysqli_error($conn));
      }
      //page redirect after posting
      echo '<script>window.location.href = "a2requests.php";</script>';
};

include_once ('php/footer.php');
?>