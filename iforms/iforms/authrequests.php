<?php
include_once ('php/header.php');
?>

<div class="columns medium-12 large-12" style="background-color: #00688B;">
    <div class="columns" style="padding-top: 1.5rem;padding-left: 4rem; background-color: #f3f8fd;margin-bottom: 10px">
        <ul class="tabs" data-tab role="tablist">
            <li class="tab-title active" role="presentation"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1">Pending</a></li>
            <li class="tab-title" role="presentation"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-2">History</a></li>
        </ul>
        <div class="tabs-content">
            <!--tab 1 pending-->
            <section style="padding-bottom: 6rem;background-color: #00688b;" role="tabpanel" aria-hidden="true" class="content active" id="panel2-1">
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
                        $l_initials = $values['userid'];

                        //AUTH LM DIPSLAY
                        $authlmsql = mysqli_query($conn, "SELECT * FROM network WHERE authlm = '" . $l_initials . "' AND  authlevel = '0' AND a0 is null ORDER BY id DESC");
                        $values = mysqli_fetch_assoc($authlmsql);

                        if ($values['authlm'] = $l_initials) {

                            foreach ($authlmsql as $row) {
                                $id = $row['id'];
                                ?>
                                <tr>
                                    <th style="font-size:0.9rem;border: 1px solid black;vertical-align: text-top;"><?php echo $row['id']; ?></th>
                                    <th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top; "><p><strong><?php echo $row['names']; ?></strong></p></br>
                            <strong><i>Username: </i></strong><?php echo $row['user_id']; ?></br>
                            <strong><i>Department: </i></strong><?php echo $row['department']; ?></br>
                            </th>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top;">
                            <p><strong><i>Request Type: </i></strong><?php echo $row['reqtype']; ?></br>
                            <strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>

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

    echo "</ul>";
    echo "</div>";
?>

                                
                            </td>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                <?php

                                echo "<input type='hidden' name='id' value= '" . $id . "' />";
                                if ($row['authlevel'] == '0' && $row['a0'] === NULL) {
                                    echo '<button href="#" data-reveal-id="approveModal" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
                                    echo '<button href="#" data-reveal-id="declineModal"  class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
                                }
                                ?>
                            </td>
<div id="approveModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to approve <?php echo $row['names']; ?>'s request.</p>
  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    if ($row['authlevel'] == '0' && $row['a0'] === NULL) {
        echo '<button name="authlmpost" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
    }
    echo "</form>";
    ?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="declineModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to decline <?php echo $row['names']; ?>'s request. Please provide a reason below:</p>

  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    echo "<textarea rows='4' cols='50' name='decline_reason' required></textarea>";
    if ($row['authlevel'] == '0' && $row['a0'] === NULL) {
      echo '<button name="authlmdecline" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
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


                    <?php
                    //AUTH 1 DIPSLAY
                    $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth1 = '" . $l_initials . "' AND  authlevel = '1' AND a1 is null ORDER BY id DESC");
                    $values = mysqli_fetch_assoc($auth1sql);

                    if ($values['auth1'] = $l_initials) {

                        foreach ($auth1sql as $row) {
                            $id = $row['id'];
                            ?>
                            <tr>
                                <th style="font-size:0.9rem;border: 1px solid black;vertical-align: text-top;"><?php echo $row['id']; ?></th>
                                <th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top; "><p><strong><?php echo $row['names']; ?></strong></p></br>
                            <strong><i>Request Type: </i></strong><?php echo $row['reqtype']; ?></br>
                            <strong><i>Username: </i></strong><?php echo $row['user_id']; ?></br>
                            <strong><i>Department: </i></strong><?php echo $row['department']; ?></br>
                            </th>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top;">
                                <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>

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

    echo "</ul>";
    echo "</div>";
?>
                            </td>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                <?php
                                echo "<input type='hidden' name='id' value= '" . $id . "' />";
                                if ($row['authlevel'] == '1' && $row['a1'] === NULL) {
                                    echo '<button href="#" data-reveal-id="approveModal" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
                                    echo '<button href="#" data-reveal-id="declineModal"  class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
}
                                ?>
                            </td>

<div id="approveModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to approve <?php echo $row['names']; ?>'s request.</p>
  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    if ($row['authlevel'] == '1' && $row['a1'] === NULL) {
        echo '<button name="auth1post" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
    }
    echo "</form>";
    ?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="declineModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to decline <?php echo $row['names']; ?>'s request. Please provide a reason below:</p>

  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    echo "<textarea rows='4' cols='50' name='decline_reason' required></textarea>";
    if ($row['authlevel'] == '1' && $row['a1'] === NULL) {
      echo '<button name="auth1decline" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
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

                        <?php
                        //FOR AUTH 2 DISPLAY
                        $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth2 = '" . $l_initials . "' AND  authlevel = '2' AND a2 is null  ORDER BY id DESC");
                        $values = mysqli_fetch_assoc($auth1sql);

                        if ($values['auth2'] = $l_initials) {

                            foreach ($auth1sql as $row) {
                                $id = $row['id'];
                                ?>
                            <tr>
                                <th style="font-size:0.9rem;border: 1px solid black;vertical-align: text-top;"><?php echo $row['id']; ?></th>
                                <th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top; "><p><strong><?php echo $row['names']; ?></strong></p></br>
                            <strong><i>Request Type: </i></strong><?php echo $row['reqtype']; ?></br>
                            <strong><i>Username: </i></strong><?php echo $row['user_id']; ?></br>
                            <strong><i>Department: </i></strong><?php echo $row['department']; ?></br>
                            </th>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top;">
                                <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>




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

    echo "</ul>";
    echo "</div>";
?>





                            </td>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                <?php
                               echo "<input type='hidden' name='id' value= '" . $id . "' />";
                                if ($row['authlevel'] == '2' && $row['a2'] === NULL) {
                                    echo '<button href="#" data-reveal-id="approveModal" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
                                    echo '<button href="#" data-reveal-id="declineModal"  class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
}
                                ?>
                            </td>

<div id="approveModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to approve <?php echo $row['names']; ?>'s request.</p>
  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    if ($row['authlevel'] == '2' && $row['a2'] === NULL) {
        echo '<button name="auth2post" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
    }
    echo "</form>";
    ?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="declineModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to decline <?php echo $row['names']; ?>'s request. Please provide a reason below:</p>

  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    echo "<textarea rows='4' cols='50' name='decline_reason' required></textarea>";
    if ($row['authlevel'] == '2' && $row['a2'] === NULL) {
      echo '<button name="auth2decline" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
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

                        <?php
                        //FOR AUTH 3 DISPLAY
                        $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth3 = '" . $l_initials . "' AND  authlevel = '3' AND a3 is null ORDER BY id DESC");
                        $values = mysqli_fetch_assoc($auth1sql);

                        if ($values['auth3'] = $l_initials) {

                            foreach ($auth1sql as $row) {
                                $id = $row['id'];
                                ?>
                            <tr>
                                <th style="font-size:0.9rem;border: 1px solid black;vertical-align: text-top;"><?php echo $row['id']; ?></th>
                                <th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top; "><p><strong><?php echo $row['names']; ?></strong></p></br>
                            <strong><i>Request Type: </i></strong><?php echo $row['reqtype']; ?></br>
                            <strong><i>Username: </i></strong><?php echo $row['user_id']; ?></br>
                            <strong><i>Department: </i></strong><?php echo $row['department']; ?></br>
                            </th>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top;">
                                <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
                            


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

    echo "</ul>";
    echo "</div>";
?>



                            </td>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                <?php
                                echo "<input type='hidden' name='id' value= '" . $id . "' />";
                                if ($row['authlevel'] == '3' && $row['a3'] === NULL) {
                                    echo '<button href="#" data-reveal-id="approveModal" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
                                    echo '<button href="#" data-reveal-id="declineModal"  class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
}
                                ?>
                            </td>

<div id="approveModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to approve <?php echo $row['names']; ?>'s request.</p>
  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    if ($row['authlevel'] == '3' && $row['a3'] === NULL) {
        echo '<button name="auth3post" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
    }
    echo "</form>";
    ?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="declineModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to decline <?php echo $row['names']; ?>'s request. Please provide a reason below:</p>

  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    echo "<textarea rows='4' cols='50' name='decline_reason' required></textarea>";
    if ($row['authlevel'] == '3' && $row['a3'] === NULL) {
      echo '<button name="auth3decline" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
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

                        <?php
                        //FOR AUTH 4 DISPLAY
                        $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth4 = '" . $l_initials . "' AND  authlevel = '4' AND a4 is null ORDER BY id DESC");
                        $values = mysqli_fetch_assoc($auth1sql);

                        if ($values['auth4'] = $l_initials) {

                            foreach ($auth1sql as $row) {
                                $id = $row['id'];
                                ?>
                            <tr>
                                <th style="font-size:0.9rem;border: 1px solid black;vertical-align: text-top;"><?php echo $row['id']; ?></th>
                                <th style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top; "><p><strong><?php echo $row['names']; ?></strong></p></br>
                            <strong><i>Request Type: </i></strong><?php echo $row['reqtype']; ?></br>
                            <strong><i>Username: </i></strong><?php echo $row['user_id']; ?></br>
                            <strong><i>Department: </i></strong><?php echo $row['department']; ?></br>
                            </th>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;border-right: 1px solid black;vertical-align: text-top;">
                                <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
                            


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

    echo "</ul>";
    echo "</div>";
?>



                            </td>
                            <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                <?php
                                echo "<input type='hidden' name='id' value= '" . $id . "' />";
                                if ($row['authlevel'] == '4' && $row['a4'] === NULL) {
                                    echo '<button href="#" data-reveal-id="approveModal" class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
                                    echo '<button href="#" data-reveal-id="declineModal"  class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
}
                                ?>
                            </td>

<div id="approveModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to approve <?php echo $row['names']; ?>'s request.</p>
  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    if ($row['authlevel'] == '4' && $row['a4'] === NULL) {
        echo '<button name="auth4post" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;">Approve</button></br>';
    }
    echo "</form>";
    ?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="declineModal" class="reveal-modal" data-reveal aria-hidden="true" role="dialog" style="width:30rem;">
  <p>You are about to decline <?php echo $row['names']; ?>'s request. Please provide a reason below:</p>

  <?php
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id' value= '" . $id . "' />";
    echo "<textarea rows='4' cols='50' name='decline_reason' required></textarea>";
    if ($row['authlevel'] == '4' && $row['a4'] === NULL) {
      echo '<button name="auth4decline" type="submit" class="tiny round right" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;">Decline</button>';
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
            <section style="padding-bottom: 6rem;background-color: #00688b;" role="tabpanel" aria-hidden="false" class="content" id="panel2-2">
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
                            $login_values = mysqli_fetch_assoc($loginsql);
                            $l_initials = $login_values['userid'];

                            //AUTH LM DIPSLAY
                            $authlmsql = mysqli_query($conn, "SELECT * FROM network WHERE authlm = '" . $l_initials . "' AND a0 is not null ORDER BY id DESC");
                            $values = mysqli_fetch_assoc($authlmsql);

                            if ($values['authlm'] = $l_initials) {

                                foreach ($authlmsql as $row) {
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
                            echo "<form action='' method='post'>";
                            echo "<input type='hidden' name='id' value= '" . $id . "' />";

                            if ($row['a0'] == 'no') {
                            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;" disabled>Declined (as Line Manager)</button>';
                            } else if ($row['a0'] == 'yes') {
                            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;" disabled>Approved (as Line Manager)</button>';
                            }

                            echo "</form>";
                            ?>
                                </td>
                                </tr>
                                    <?php
                                };
                            }
                            //AUTH LM DIPSLAY
                            ?>


                            <?php
                            //AUTH 1 DIPSLAY
                            $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth1 = '" . $l_initials . "' AND a1 is not null ORDER BY id DESC");
                            $values = mysqli_fetch_assoc($auth1sql);

                            if ($values['auth1'] = $l_initials) {

                                foreach ($auth1sql as $row) {
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
                                echo "<form action='' method='post'>";
                                echo "<input type='hidden' name='id' value= '" . $id . "' />";

                                if ($row['a1'] == 'no') {
                                    echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;" disabled>Declined (as Technical)</button>';
                                } else if ($row['a1'] == 'yes') {
                                    echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;" disabled>Approved (as Technical)</button>';
                                }
                                echo "</form>";
                                ?>
                                </td>
                                </tr>
                                    <?php
                                };
                            }
                            //AUTH 1 DIPSLAY
                            ?>

                            <?php
                            //FOR AUTH 2 DISPLAY
                            $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth2 = '" . $l_initials . "' AND a2 is not null  ORDER BY id DESC");
                            $values = mysqli_fetch_assoc($auth1sql);

                            if ($values['auth2'] = $l_initials) {

                                                        foreach ($auth1sql as $row) {
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
?>
</br>
                                                            <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
                                                        </td>
                                                        <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                                        <?php
                                                        echo "<form action='' method='post'>";
                                                        echo "<input type='hidden' name='id' value= '" . $id . "' />";

                                                        if ($row['a2'] == 'no') {
                                                            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;" disabled>Declined (as Security)</button>';
                                                        } else if ($row['a2'] == 'yes') {
                                                            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;" disabled>Approved (as Security)</button>';
                                                        }
                                                        echo "</form>";
                                                        ?>
                                                        </td>
                                                        </tr>
                                    <?php
                                };
                            }
                            //FOR AUTH 2 DISPLAY
                            ?>

                            <?php
                            //FOR AUTH 3 DISPLAY
                            $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth3 = '" . $l_initials . "' AND a3 is not null ORDER BY id DESC");
                            $values = mysqli_fetch_assoc($auth1sql);

                            if ($values['auth3'] = $l_initials) {

                                foreach ($auth1sql as $row) {
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
?>
</br>
                                                            <p><strong><i>Reason: </i></strong><?php echo $row['purpose']; ?></p>
                                                        </td>
                                                        <td style="font-size:0.9rem;border-bottom: 1px solid black;vertical-align: text-top;">
                                                        <?php
                                                        echo "<form action='' method='post'>";
                                                        echo "<input type='hidden' name='id' value= '" . $id . "' />";

                                                        if ($row['a3'] == 'no') {
                                                            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;" disabled>Declined (as Operations)</button>';
                                                        } else if ($row['a3'] == 'yes') {
                                                            echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;" disabled>Approved (as Operations)</button>';
                                                        }
                                                        echo "</form>";
                                                        ?>
                                                        </td>
                                                        </tr>
                                    <?php
                                };
                            }
                            //FOR AUTH 3 DISPLAY
                            ?>

                            <?php
                            //FOR AUTH 4 DISPLAY
                            $auth1sql = mysqli_query($conn, "SELECT * FROM network WHERE auth4 = '" . $l_initials . "' AND a4 is not null ORDER BY id DESC");
                            $values = mysqli_fetch_assoc($auth1sql);

                            if ($values['auth4'] = $l_initials) {

                                foreach ($auth1sql as $row) {
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
                                                            echo "<form action='' method='post'>";
                                                            echo "<input type='hidden' name='id' value= '" . $id . "' />";

                                                            if ($row['a4'] == 'no') {
                                                                echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #d41a22;" disabled>Declined (as Risk & Legal)</button>';
                                                            } else if ($row['a4'] == 'yes') {
                                                                echo '<button class="tiny round" style="font-size:0.9rem;border-bottom: 1px solid blackmargin:auto;padding:5px;background-color: #184818;" disabled>Approved (as Risk & Legal)</button>';
                                                            }
                                                            echo "</form>";
                                                            ?>
                                                        </td>
                                                        </tr>
                                                        <?php
                                                    };
                                                }
                            //FOR AUTH 4 DISPLAY
                            ?>
                    </thead>
                </table>
            </section>
            <!--tab 2 pending-->
        </div>
    </div>
</div>

<?php
//AUTH LM
if (isset($_POST['authlmpost'])) {

    $id = $_POST['id'];
    $sql = "UPDATE `network` SET authlevel= '1', a0 = 'yes' WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    $notify_authsql = mysqli_query($conn, "SELECT DISTINCT network.id as nid, initials, userid, email, authlm, auth1, auth2, auth3, auth4 FROM users, network 
WHERE network.id = '" . $id . "' AND auth1 = initials");
    $notify_values = mysqli_fetch_assoc($notify_authsql);


    $message = 'Hi,<br />
<br />
An authorization request is pending your approal. Click <a href="http://192.168.253.158/iforms/index.php">HERE</a> to view.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "AUTHORIZATION FORM REQUEST (AS Technical)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_values['email'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);

    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
if (isset($_POST['authlmdecline'])) {

    $decline_reason = $_POST['decline_reason'];
    $id = $_POST['id'];
    $sql = "UPDATE `network` SET a0 = 'no', decline_reason = '" . $decline_reason . "' WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }


    $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails, initials FROM users, network WHERE network.id = '" . $id . "' AND authlm = initials");
    $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);


    $message = 'Hi,<br />
<br />
Your authorization request was declined by ' . $notify_reqvalues['uname'] . '. Reason: ' . $decline_reason . '.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "DECLINED AUTHORIZATION FORM REQUEST (by Line Manager)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_reqvalues['nemails'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);

    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
//AUTH LM
//AUTH 1
if (isset($_POST['auth1post'])) {

    $id = $_POST['id'];
    $sql = "UPDATE `network` SET authlevel= '2', a1 = 'yes' WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }


    $notify_authsql = mysqli_query($conn, "SELECT DISTINCT network.id as nid, initials, userid, email, authlm, auth1, auth2, auth3, auth4 FROM users, network 
WHERE network.id = '" . $id . "' AND auth2 = initials");
    $notify_values = mysqli_fetch_assoc($notify_authsql);


    $message = 'Hi,<br />
<br />
An authorization request is pending your approal. Click <a href="http://192.168.253.158/iforms/index.php">HERE</a> to view.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "AUTHORIZATION FORM REQUEST (AS Security)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_values['email'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);




    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
if (isset($_POST['auth1decline'])) {

    $decline_reason = $_POST['decline_reason'];
    $id = $_POST['id'];
    $sql = "UPDATE `network` SET a1 = 'no' WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }


    $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails, initials FROM users, network WHERE network.id = '" . $id . "' AND auth1 = initials");
        $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);


        $message = 'Hi,<br />
    <br />
    Your authorization request was declined by ' . $notify_reqvalues['uname'] . '. Reason: ' . $decline_reason . '.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "DECLINED AUTHORIZATION FORM REQUEST (by Technical)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_reqvalues['nemails'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);



    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
//AUTH 1
//AUTH 2
if (isset($_POST['auth2post'])) {

    $id = $_POST['id'];
    $sql = "UPDATE `network` SET authlevel = '3', a2 = 'yes' WHERE id = '" . $id . "'";

    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    $notify_authsql = mysqli_query($conn, "SELECT DISTINCT network.id as nid, initials, userid, email, authlm, auth1, auth2, auth3, auth4 FROM users, network 
WHERE network.id = '" . $id . "' AND auth3 = initials");
    $notify_values = mysqli_fetch_assoc($notify_authsql);


    $message = 'Hi,<br />
<br />
An authorization request is pending your approal. Click <a href="http://192.168.253.158/iforms/index.php">HERE</a> to view.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "AUTHORIZATION FORM REQUEST (AS Operations)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_values['email'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);


    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
if (isset($_POST['auth2decline'])) {

    $decline_reason = $_POST['decline_reason'];
    $id = $_POST['id'];
    $sql = "UPDATE `network` SET a2 = 'no'  WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails FROM users, network WHERE network.id = '" . $id . "'");
    $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);


    $message = 'Hi,<br />
<br />
Your authorization request was declined by ' . $notify_reqvalues['uname'] . '. Reason: ' . $decline_reason . '.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "DECLINED AUTHORIZATION FORM REQUEST (by Security)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_reqvalues['nemails'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);

    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
//AUTH 2
//AUTH 3
if (isset($_POST['auth3post'])) {

    $id = $_POST['id'];
    $sql = "UPDATE `network` SET authlevel = '4',a3 = 'yes' WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }


    $notify_authsql = mysqli_query($conn, "SELECT DISTINCT network.id as nid, initials, userid, email, authlm, auth1, auth2, auth3, auth4 FROM users, network 
WHERE network.id = '" . $id . "' AND auth4 = initials");
    $notify_values = mysqli_fetch_assoc($notify_authsql);


    $message = 'Hi,<br />
<br />
An authorization request is pending your approal. Click <a href="http://192.168.253.158/iforms/index.php">HERE</a> to view.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "AUTHORIZATION FORM REQUEST (AS Risk and Legal)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_values['email'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);


    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
if (isset($_POST['auth3decline'])) {

    $decline_reason = $_POST['decline_reason'];
    $id = $_POST['id'];
    $sql = "UPDATE `network` SET a3 = 'no' WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }


    $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails FROM users, network WHERE network.id = '" . $id . "'");
    $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);


    $message = 'Hi,<br />
<br />
Your authorization request was declined by ' . $notify_reqvalues['uname'] . '. Reason: ' . $decline_reason . '.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "DECLINED AUTHORIZATION FORM REQUEST (by Operations)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_reqvalues['nemails'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);



    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
//AUTH 3
//AUTH 4
if (isset($_POST['auth4post'])) {

    $id = $_POST['id'];
    $sql = "UPDATE `network` SET authlevel = '5', a4 = 'yes', last_authdate = CURRENT_TIMESTAMP WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }

//notify requester
    $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails, initials FROM users, network WHERE network.id = '" . $id . "' ");
    $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);

    //body 1
    $message = 'Hi,<br />
    <br />
    Your request has been approved. It is pending implementation. Click <a href="http://192.168.253.158/iforms/index.php">HERE</a> to view.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "APPROVED AUTHORIZATION FORM REQUEST";      // Subject (which isn't required)  
    $mail->MsgHTML($message);


    // Send To  
    $mail->AddAddress($notify_reqvalues['nemails'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);
//notify requester

    //page redirect after posting
    echo '<script>window.location.href = "done.php";</script>';

};
if (isset($_POST['auth4decline'])) {

    $decline_reason = $_POST['decline_reason'];
    $id = $_POST['id'];
    $sql = "UPDATE `network` SET a4 = 'no' WHERE id = '" . $id . "'";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }


   $notify_reqsql = mysqli_query($conn, "SELECT users.names as uname, network.id as nid, network.emails as nemails FROM users, network WHERE network.id = '" . $id . "'");
    $notify_reqvalues = mysqli_fetch_assoc($notify_reqsql);


    $message = 'Hi,<br />
<br />
Your authorization request was declined by ' . $notify_reqvalues['uname'] . '. Reason: ' . $decline_reason . '.';

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
    $mail->SetFrom('donotreply.ke@interswitchgroup.com', 'iForms');
    $subject1 = $mail->Subject = "DECLINED AUTHORIZATION FORM REQUEST (by Risk and Legal)";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress($notify_reqvalues['nemails'], "Authorizer"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
    //$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
    unset($mail);


    //page redirect after posting
    echo '<script>window.location.href = "authrequests.php";</script>';
};
//AUTH 4

include_once ('php/footer.php');
?>