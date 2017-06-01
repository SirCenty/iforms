<?php
include_once ('php/header.php');
?>


<div class="columns medium-12 large-12" style="background-color: #00688B;">
    
<label style="color: #fff;padding:1rem;font-size: 1.2rem;text-align: left;"><b><u>MY REQUEST FORMS</u></b></label>
			<table  style="margin-left: auto;margin-right: auto;" width="98%">
            <thead>
              <tr style="background-color:#00425f;border: 1px solid black;">
                <th style="font-size:1rem;color: #fff;border: 1px solid black">No.</th>
                <th style="font-size:1rem;color: #fff;">Type of Request</th>
                <th style="font-size:1rem;color: #fff;width: 50%;">System Access</th>
                <th style="font-size:1rem;color: #fff;">Auth1</th>
                <th style="font-size:1rem;color: #fff;">Auth2</th>
                <th style="font-size:1rem;color: #fff;">Auth3</th>
                <th style="font-size:1rem;color: #fff;">Auth4</th>
                <th style="font-size:1rem;color: #fff;">Implement</th>
              </tr>



<?php
//query for the filter results
$result = DB::query('SELECT * FROM `network` WHERE user = "centy"  ORDER BY id DESC ');

foreach ($result as $row) {
  $id = $row['id'];
  ?>


<tr>
<td style="font-size:0.9rem;border: 1px solid black"><?php echo $row['id']; ?></td>
<td style="font-size:0.9rem;border-bottom: 1px solid black"><?php echo $row['reqtype']; ?></td>
<td style="font-size:0.9rem;border-bottom: 1px solid black"><?php echo $row['paynet'].' '.$row['interswitch'].' '.$row['paynetslan'].' '.$row['interswitchgroup'].' '.$row['prime'].' '.$row['online'].' '.$row['fraudguard'].' '.$row['ist'].' '.$row['intsqlsrv'].' '.$row['intsqlsrv1'].' '.$row['officedb'].' '.$row['realtimedb'].' '.$row['cencon'].' '.$row['entsqlsrv'].' '.$row['router'].' '.$row['firewall'].' '.$row['access_control'].' '.$row['network_switch'].' '.$row['pastel'].' '.$row['terminal_server'].' '.$row['intranet'].' '.$row['tranwall_tc'].' '.$row['other']; ?></br>
    <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
    </td>

<?php if(empty($row['a1'])) {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth1'].'</p></td>';
    } else {
    	if ($row['a1'] == 'no') {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth1'].'</p></td>';
    	} else {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth1'].'</p></td>';
    	}
    };
?>

<?php if(empty($row['a2'])) {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth2'].'</p></td>';
    } else {
    	if ($row['a2'] == 'no') {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth2'].'</p></td>';
    	} else {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth2'].'</p></td>';
    	}
    };
?>	

<?php if(empty($row['a3'])) {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth3'].'</p></td>';
    } else {
    	if ($row['a3'] == 'no') {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth3'].'</p></td>';
    	} else {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth3'].'</p></td>';
    	}
    };
?>	

<?php if(empty($row['a4'])) {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth4'].'</p></td>';
    } else {
    	if ($row['a4'] == 'no') {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth4'].'</p></td>';
    	} else {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="round button" style="font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth4'].'</p></td>';
    	}
    };
?>	

<?php if(empty($row['implement'])) {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="radius button" style="font-size: 0.6rem;background-color: ;text-align: center;">DONE</p></td>';
    } else {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black"><p class="radius button" style="font-size: 0.6rem;background-color: ;text-align: center;">DONE</p></td>';
    	
    };
?>

</tr>


    <?php echo "<input type='hidden' name='id' value= '" .$id . "' />"; ?>

    <!--td style="text-transform:capitalize;"><?php 
        /*echo "<form action='' method='post'>";
          echo "<input type='hidden' name='id' value= '" .$id . "' />";
        if(empty($row['timeout'])) {
          echo '<button name="leaving" type="submit" class="tiny round" style="margin:auto;padding:5px;background-color: #d41a22;">close</button>';
        } else {
          echo '<button class="tiny round" style="margin:auto;padding:5px;background-color: #0b8036;" disabled>left</button>';
        }
        echo "</form>";*/
      ?>
    </td-->

<?php
}
?>
              

              
            </thead>
</div>

<?php

include_once ('php/footer.php');
?>