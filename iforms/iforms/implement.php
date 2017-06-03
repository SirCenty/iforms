<?php
include_once ('php/header.php');
?>

<div class="columns medium-12 large-12" style="background-color: #00688B;">
<div class="columns" style="padding-top: 1.5rem;padding-left: 4rem; background-color: #f3f8fd;margin-bottom: 10px">
    <ul class="tabs" data-tab role="tablist">
      <li class="tab-title" role="presentation"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1">Pending</a></li>
      <li class="tab-title active" role="presentation"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-2">Permissions</a></li>
    </ul>
    <div class="tabs-content"">
      <!--tab 1 pending-->
            <section style="padding-bottom: 6rem;background-color: #00688b;" role="tabpanel" aria-hidden="true" class="content" id="panel2-1">
                <table  style="margin-left: auto;margin-right: auto;width:98%;zoom:85%;">
                    <thead>
                        <tr style="background-color:#00425f;border: 1px solid black;">
                            <th style="font-size:0.9rem;color: #fff;border: 1px solid black">No.</th>
                            <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;">Requested By</th>
                            <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;width: 65%;">System Access</th>
                            <th style="font-size:0.9rem;color: #fff;">Status</th>
                        </tr>


                        <?php
                        $loginsql = mysqli_query($conn, "SELECT * FROM users WHERE userid = '" . $_SESSION['sess_username'] . "'");
                        $values = mysqli_fetch_assoc($loginsql);
                        $l_initials = $values['initials'];

                        //PENDING IMPLEMENTATION DIPSLAY
                        $impsql = mysqli_query($conn, "SELECT * FROM network WHERE a4 = 'yes' AND  implement_date is NULL ORDER BY id DESC");
                        $values = mysqli_fetch_assoc($impsql);

                        if ($values['a4'] == 'yes' ) {

                            foreach ($impsql as $row) {
                                $id = $row['id'];
                                ?>
                                <tr>
                                    <th style="font-size:0.9rem;border: 1px solid black;vertical-align: text-top;"><?php echo $row['id']; ?></th>
                                    <th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top; "><p><strong><?php echo $row['names']; ?></strong></p></br>
                            <strong><i>Request Type: </i></strong><?php echo $row['reqtype']; ?></br>
                            <strong><i>Username: </i></strong><?php echo $row['user_id']; ?></br>
                            <strong><i>Department: </i></strong><?php echo $row['department']; ?></br>
                            </th>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top;"><?php
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

    echo "</ul>";
    echo "</div>";
?></br>
                                <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
                            </td>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                <?php

                                echo "<input type='hidden' name='id' value= '" . $id . "' />";
                                if ($row['authlevel'] == '5' && $row['a4'] == 'yes') {
                                    echo '<button href="#" data-reveal-id="doneModal" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Done</button></br>';
                                }
                                ?>
                            </td>
<div id="doneModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p style="text-align: center;">Have you completed implementing <?php echo $row['names']; ?>'s request?</p>
  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    if ($row['authlevel'] == '5' && $row['a4'] == 'yes') {
        echo '<button name="implement" type="submit" class="tiny radius right" style="font-size:0.9rem;border-bottom: 1px solid black;margin:auto;padding:0.3rem;background-color:#184818;">YES</button></br>';
    }
    echo "</form>";
    ?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

                            </tr>
                                <?php
                            };
                        }
                        ?>
                    </thead>
                </table>
            </section>
      <!--tab 1 pending-->
      <!--tab 2 pending-->
      <section style="padding-bottom: 6rem;background-color: #00688b;" role="tabpanel" aria-hidden="false" class="content active" id="panel2-2">
        <!--filter-->
        <div class="columns panel" style="border:0px;height:auto;zoom:85%;">
          <form method="POST" enctype="multipart/form-data" action="">
              <div class="row  hide-for-small columns ">
                  <div class="columns small-2 medium-4 large-4  ">
                    <select style="height: 2rem;font-size: 1.1rem;font-weight: bold;" name="systems" required="">
                      <option style="text-transform: capitalize" value="">Choose System</option>
                        <?php
                          //query for the filter results
                          $result = DB::query('SELECT * FROM `systems` ORDER BY name ASC');
                          foreach ($result as $row) {
                          ?>
                            <option style="width: auto;" value="<?php echo $row['name'];?>"><?php echo $row['entity'];?></option>
                          <?php
                          }
                        ?>
                      </select>
                  </div>

                  <div class="columns small-2 medium-4 large-4  ">
                    <select style="height: 2rem;font-size: 1.1rem;font-weight: bold;" name="permissions" required="">
                      <option style="text-transform: capitalize" value="">Select Permissions</option>
                    
                      <?php
                        //query for the filter results
                        $result = DB::query('SELECT * FROM `permissions` ORDER BY pid ASC');
                        foreach ($result as $row) {
                        ?>
                          <option style="width: auto;" value="<?php echo $row['permissions'];?>"><?php echo $row['permissions'];?></option>
                        <?php
                        }
                      ?>

                    </select>
                  </div>
                  <div class="columns small-2 medium-2 large-2" style="margin:0px;padding:0px;">
                        <button href="#" class="button postfix" type="submit" name="subsearch" >Filter</button>
                  </div>
              </div>
          </form>
        </div>
        <!--filter-->
        <!--Display-->
        <table  style="width:100%;zoom:85%;">
          <thead>
            <?php
              if (isset($_POST['subsearch'])) {
              //prevent mysqli injection
              $searchsystems = mysqli_real_escape_string($conn, $_POST['systems']);
              $searchperm = mysqli_real_escape_string($conn, $_POST['permissions']);
              ?>
              <!--filter result info-->
              <div class="columns panel" style="border:0px ;zoom:85%;">
                <div class="breadcrumbs">
                  <H1 style="font-size:1.0rem;">Filter result for: <?php echo $searchsystems;?> <?php echo $searchperm;?></H1>
                </div>
              </div>
              <!--table header-->
              <tr style="background-color:#00425f;border: 1px solid black;">
                <th style="font-size:0.9rem;color: #fff;border: 1px solid black;">#</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;">Names</th>
                <th style="font-size:0.9rem;color: #fff;border-right: 1px solid black;">Type of Request</th>
                <th style="font-size:0.9rem;color: #fff;">Auth1</th>
                <th style="font-size:0.9rem;color: #fff;">Auth2</th>
                <th style="font-size:0.9rem;color: #fff;">Auth3</th>
                <th style="font-size:0.9rem;color: #fff;">Auth4</th>
                <th style="font-size:0.9rem;color: #fff;text-align: center;">Last Auth Date</th>
                <th style="font-size:0.9rem;color: #fff;text-align: center;">Implemented Date</th>
              </tr>
              <!--table header-->

              <?php
              //display content            
              //query for the filter results
              $result = DB::query('SELECT * FROM `network` WHERE `'.$searchsystems.'` = "'.$searchperm.'" AND implement_date IS NOT NULL ORDER BY id DESC');

              foreach ($result as $row) {
                  $id = $row['id'];
                  ?>
             
                <tr>
                  <td style="font-size:0.9rem;border: 1px solid black"><?php echo $row['id']; ?></td>
                  <td style="font-size:0.9rem;border: 1px solid black;"><?php echo $row['names']; ?></td>
                  <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['reqtype']; ?></td>
                  <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['auth1']; ?></td>
                  <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['auth2']; ?></td>
                  <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['auth3']; ?></td>
                  <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['auth4']; ?></td>
                  <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['last_authdate']; ?></td>
                  <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $row['implement_date']; ?></td>
                  <input type='hidden' name='id' value= '" .$id . "' />
                </tr>

                <?php
                }
              }
            ?>
          </thead>
        </table>
        <!--Display-->
      </section>
      <!--tab 2 pending-->
    </div>
  </div>


</div>

<?php
    
if(isset($_POST['implement'])){

  $id = $_POST['id'];
  $sql = "UPDATE `network` SET implement_date= CURRENT_TIMESTAMP WHERE id = '" . $id . "'";               
  if (!mysqli_query($conn,$sql)) {die('Error: ' . mysqli_error($conn));
      }

//notify requester
    $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails, initials FROM users, network WHERE network.id = '" . $id . "' ");
    $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);

    //body 1
    $message = 'Hi,<br />
    <br />
    Your request has been implemented. Click <a href="http://localhost/iforms/index.php">HERE</a> to close.';

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
    $subject1 = $mail->Subject = "IMPLEMENTED AUTH. FORM REQUEST";      // Subject (which isn't required)  
    $mail->MsgHTML($message);


    // Send To  
    $mail->AddAddress($notify_reqvalues['nemails'], "Requester"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);
//notify requester

      //page redirect after posting
      echo '<script>window.location.href = "implement.php";</script>';
};


include_once ('php/footer.php');
?>
