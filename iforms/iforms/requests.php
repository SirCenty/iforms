<?php
include_once ('php/header.php');
?>


<div class="columns medium-12 large-12" style="background-color: #00688B;">
    
<label style="color: #fff;padding:0.9rem;font-size: 1.2rem;text-align: left;"><b><u>My Request Forms</u></b></label>
			<table  style="margin-left: auto;margin-right: auto;width:98%;zoom:85%;">
            <thead>
              <tr style="background-color:#00425f;border: 1px solid black;">
                <th style="font-size:0.9rem;color: #fff;border: 1px solid black;">No.</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;width: 50%;">System Access</th>
                <th style="font-size:0.9rem;color: #fff;">Line Manager</th>
                <th style="font-size:0.9rem;color: #fff;">Technical</th>
                <th style="font-size:0.9rem;color: #fff;">Security</th>
                <th style="font-size:0.9rem;color: #fff;">Operations</th>
                <th style="font-size:0.9rem;color: #fff;">Risk and Legal</th>
                <th style="font-size:0.9rem;color: #fff;border-left: 1px solid black;text-align: center;">Access Granted</th>
              </tr>



<?php
//query for the filter results
$result = DB::query('SELECT * FROM `network` WHERE user_id = "'.$_SESSION['sess_username'].'" ORDER BY id DESC ');

foreach ($result as $row) {
  $id = $row['id'];
  ?>


<tr>
<td style="font-size:0.9rem;border: 1px solid black;vertical-align: text-top;"><?php echo $row['id']; ?></td>
<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;border-right: 1px solid black;">

<p><strong><i>Request Type: </i></strong><?php echo $row['reqtype']; ?></br>
<strong><i>Purpose: </i></strong><?php echo $row['purpose']; ?></p>


<?php
echo    "<script>
            function myFunction".$row['id']."() {

                var x = document.getElementById('viewPerm".$row['id']."');
                if (x.style.display === 'none') {
                    x.style.display = 'block';
                } else {
                    x.style.display = 'none';
                }
            }
        </script>";

        echo "<p><a onclick='myFunction".$row['id']."()'>View Permissions</a></p>";
        echo "<div id='viewPerm".$row['id']."' style='display: none;'>";
        echo "<ul class='columnlist'>";
            $req_result = DB::query('SELECT * FROM `systems`');

        foreach ($req_result as $rowq) {
                $req_name = $rowq['name'];

            echo    "<li style='border:1px solid black;width:100%;'>
                        <p style='width: 70%;border-right:1px solid black;display:inline-block;'>".$rowq['entity']." </p>
                        <p style='width: 30%;display:inline;'><b> " . $row[$rowq["name"]] . "</b></p>
                    </li>";
        }

        echo "</ul>
            <br>
            <p><strong><i>Approved date by Risk & Legal: </i></strong>".$row['last_authdate']."</br>
            <strong><i>Implementation Date: </i></strong>".$row['implement_date']."</p>
        </div>";
    ?>


    </td>

<?php
    if($row['a0'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['authlm'].'</p></td>';
    } else {
        if ($row['a0'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['authlm'].'</p></td>';
        } else if ($row['a0'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['authlm'].'</p></td>';
        }
    };
?>


<?php
    if($row['a1'] === NULL) {
    	echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth1'].'</p></td>';
    } else {
    	if ($row['a1'] == 'no') {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth1'].'</p></td>';
    	} else if ($row['a1'] == 'yes')  {
    		echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth1'].'</p></td>';
    	}
    };
?>

<?php
    if($row['a2'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth2'].'</p></td>';
    } else {
        if ($row['a2'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth2'].'</p></td>';
        } else if ($row['a2'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth2'].'</p></td>';
        }
    };
?>

<?php
    if($row['a3'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth3'].'</p></td>';
    } else {
        if ($row['a3'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth3'].'</p></td>';
        } else if ($row['a3'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth3'].'</p></td>';
        }
    };
?>

<?php 
    if($row['a4'] === NULL) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: ;text-align: center;">'.$row['auth4'].'</p></td>';
    } else {
        if ($row['a4'] == 'no') {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #d41a22;text-align: center;">'.$row['auth4'].'</p></td>';
        } else if ($row['a4'] == 'yes')  {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;"><p class="round button" style="margin:0px;font-size: 0.6rem;padding: 7px;background-color: #0b8036;text-align: center;color: #fff;">'.$row['auth4'].'</p></td>';
        }
    };
?>


<?php
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='id' value= '" .$id . "' />";
    if($row['a4'] === NULL || $row['a4'] == 'no' || $row['implement_date'] == NULL ) {
        echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;border-left: 1px solid black;"><button class="radius" style="font-size:0.9rem;margin:auto;">NOT DONE</button></td>';
    } else {
        if ($row['access_granted'] != NULL) {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;border-left: 1px solid black;"><button class="radius" style="font-size:0.9rem;margin:auto;background-color:#0b8036;" disabled>DONE</button></td>';
        } else {
            if ($row['a4'] == 'yes' && $row['implement_date'] != NULL ) {
            echo '<td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;border-left: 1px solid black;"><button class="radius" name="done" type="submit" style="font-size:0.8rem;margin:auto;background-color:#083e1c;padding:0.5rem;">Click Me if Implemented</button></td>';
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