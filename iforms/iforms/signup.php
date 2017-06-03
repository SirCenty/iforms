<?php
include_once ('php/headerLS.php');
?>

    <div class="columns medium-12 large-12" style="padding-top: 2rem;">
        <form action="" method="POST" data-abide>
            <!-- Reveal Modals begin -->
            <div id="firstModal" class="reveal-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
                <div class="medium-10 large-10" style="margin-left: auto;margin-right: auto;">
                    <label style="color: #fff;"><b><u>Please choose the domain, database, device or systems that you implement access forms.</u></b></label>
                    <table style="margin-left: auto;margin-right: auto;width: 100%;">
                        <tbody>
                            <tr style="border-bottom: 1px solid black;">
                               
                                <td style="background-color:#00425f;color: #fff;text-align: top;height: 20px;">
                                   <ul class='columnlist'> 
                                      


                                    <?php
                                    //query for the filter results
                                    $result = DB::query('SELECT * FROM `systems` ORDER BY entity ASC');

                                    foreach ($result as $row) {
                                        $sid = $row['sid'];
                                        ?>
                                        <li><input style="width: auto;" type="checkbox" name="<?php echo $row['name'];?>" value="<?php echo $row['value'];?>" ><?php echo $row['entity'];?></li>

                                        <?php
                                        }
                                    ?>

                                    </ul>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            <!-- Reveal Modals end -->
            <div class="columns"  >
                <div class="row" style="background-color: #00688B;">
                    <div class="medium-4 large-4 columns">
                    <label style="color: #fff;">Name <small></small></label>
                        <input name="name" type="text" placeholder=" e.g. Firstname Lastname" required />
                        <small class="error">Name must be a word.</small>
                    </div>
                    <div class="medium-4 large-4 columns">
                        <label style="color: #fff;">Email <small></small>
                            <input name="email" type="email" required placeholder=" e.g. example@mail.com" />
                        </label>
                        <small class="error">provide an email address.</small>
                    </div>
                    <div class="medium-4 large-4 columns end">
                        <label style="color: #fff;">Phone Number<small></small>
                            <input name="phone" type="text" placeholder=" e.g. +254715261526" required />
                        </label>
                    </div>
                </div>

                <div class="row" style="background-color: #00688B;">
                    <div class="medium-4 large-4 columns end">
                        <label style="color: #fff;">Domain User id <small></small>
                            <input name="username" type="text" placeholder=" e.g. Username" required/>
                        </label>
                        <small class="error">user id required and must be a your interswitch domain username</small>
                    </div>
                    <div class="medium-4 large-4 columns end">
                        <label style="color: #fff;">Department<small></small>
                            <select style="height: 2.4rem;font-size: 1rem;font-weight: bold;" name="department" required="">
                                <option style="text-transform: capitalize" value="">Choose Department</option>
                                    <?php
                                    //query for the filter results
                                    $result = DB::query('SELECT * FROM `department` ORDER BY entity ASC');

                                    foreach ($result as $row) {
                                        ?>
                                            <option style="width: auto;" value="<?php echo $row['entity'];?>"><?php echo $row['entity'];?></option>
                                        <?php
                                        }
                                    ?>
                            </select>
                        </label>
                        <small class="error">department required and must be a word</small>
                    </div>
                    <div class="medium-4 large-4 columns end" style="background-color: #00688B;">
                        <label style="color: #fff;">Job Title<small></small>
                            <input name="job_title" type="text" placeholder=" e.g. Technician" required/>
                        </label>
                        <small class="error">Job title required and must be a word</small>
                    </div>
                </div>

                <div class="row" style="background-color: #00688B;">
                    <div class="large-8 large-centered columns">
                        <div class="medium-6 large-6 columns password-field">
                            <label style="color: #fff;">Password <small></small>
                                <input name="password" type="password" id="password" required >
                            </label>
                            <small class="error">provide password,no spaces</small>
                        </div>

                        <div class="medium-6 large-6 columns end password-confirmation-field">
                            <label style="color: #fff;">Confirm Password <small></small>
                              <input name="password" type="password" required data-equalto="password">
                            </label>
                            <small class="error">The password did not match</small>
                        </div>
                    </div>
                </div>

                    <!--Toggle implementer yes or no-->
                    <script type="text/javascript">
                     window.onload = function() {
                        document.getElementById('ifYes').style.display = 'none';
                        document.getElementById('ifNo').style.display = 'none';
                    }
                    function yesnoCheck() {
                        if (document.getElementById('yesCheck').checked) {
                            document.getElementById('ifYes').style.display = 'block';
                            document.getElementById('ifNo').style.display = 'none';
                        } 
                        else if(document.getElementById('noCheck').checked) {
                            document.getElementById('ifNo').style.display = 'block';
                            document.getElementById('ifYes').style.display = 'none';
                       }
                    }
                    </script>
                    <!--Toggle implementer yes or no-->

                <div class="row" style="background-color: #00688B;">
                    <div class="medium-10 large-10 columns end">
                        <label style="color: #fff;">
                            Do you implement any authorization form?
                            <input type="radio" style="width:1rem;" onclick="javascript:yesnoCheck();" id="yesCheck" name="implementer" value="yes" required>Yes
                            <input type="radio" style="width:1rem;" onclick="javascript:yesnoCheck();" id="noCheck"  name="implementer" value="no">No
                            <button id="ifYes" style="display: none;" class="tiny radius" data-reveal-id="firstModal" name="choose">CHOOSE SYSTEMS</button>
                            <input id="ifNo"  type="hidden"/>
                        </label>
                    </div>
                    <div class="medium-10 large-10 columns end">
                        <label style="color: #fff;">
                            Do you authorize forms?
                            <input type="radio" style="width:1rem;" name="authorizer" value="yes" required>Yes
                            <input type="radio" style="width:1rem;" name="authorizer" value="no">No
                        </label>
                        <small class="error">department required and must be a word</small>
                    </div>
                </div>
                <div class="row" style="background-color: #00688B;">
                    <button style="margin-left: 1rem;" class="tiny round" type="submit" name="signup">Sign Up</button>
                </div>
            </div>    
        </form>
    </div>

    <div style="background-image: url(images/image5.jpg);background-repeat:no-repeat;background-size:cover; height: 100%;filter: blur(20px);top: 0;
      left: 0;
      z-index: -1; -webkit-filter: blur(5px);
      -moz-filter: blur(5px);
      -o-filter: blur(5px);
      -ms-filter: blur(5px);
      filter: blur(5px);
      position: fixed;
      width: 100%;
      height: 100%;" >
    </div>
</div>

<?php

if(isset($_POST['signup'])) {
$names = $_POST['name'];
$splitname = explode(" ",$_POST['name']);
    $initials = "";

    foreach ($splitname as $s) {
            $initials .= $s[0];
    }

$email = $_POST['email'];
$phone = $_POST['phone'];
$userid = $_POST['username'];
$department = $_POST['department'];
$job_title = $_POST['job_title'];
$password = $_POST['password'];
$authorizer = $_POST['authorizer'];
$implementer = $_POST['implementer'];
$paynet = $_POST['paynet'];
$prime = $_POST['prime'];


//create salt
function generateSalt($max = 64) {
    $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
    $i = 0;
    $salt = "";
    while ($i < $max) {
        $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
        $i++;
    }
    return $salt;
}

    $user_salt = generateSalt(); // Generates a salt from the function above
    $combo = $user_salt . $password; // Appending user password to the salt 
    $hashed_pwd = hash('sha512',$combo); // Using SHA512 to hash the salt+password combo string

$sql = "INSERT INTO `users`(`names`, `initials`, `email`, `phone`, `userid`, `department`, `job_title`, `password`, `salt`, `authorizer`, `implementer`, `paynet`, `prime`) VALUES ( '$names', '$initials', '$email','$phone','$userid','$department','$job_title','$hashed_pwd', '$user_salt','$authorizer','$implementer','$paynet','$prime' )";
 
 if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
    //page redirect after posting
    echo '<script>window.location.href = "login.php";</script>';
}

include_once ('php/footer.php');
?>



