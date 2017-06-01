<?php
include_once ('php/headerLS.php');
?>

<div class="columns" style="background-color: #f3f8fd;"">

    <div class="tabs-content" style="margin-bottom: 0rem;">
        <!--tab 1 LOGIN-->
        <section role="tabpanel" aria-hidden="false" class="content active" id="login">
            <div class="columns" >
                <form action="" method="POST"  style="margin-left:auto;margin-right:auto;padding:2rem;width:20rem;background-color: #00688B;">
                    <div class="row" >
                        <label style="color:#ffffff;" >Userid</label>
                        <input style="margin: 0px;"  name="username" type="text" size="30" required/><br/>
                        <label style="color:#ffffff;" >Password</label>
                        <input style="margin: 0px;" name="password" type="password" size="30" required/><br/>
                        <div style="padding:0px">
                            <button class="tiny round" type="submit" name="login">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--tab 1 LOGIN-->
         <!--tab 2 SIGNUP-->
        <section role="tabpanel" aria-hidden="true" class="content" id="signup" >
          
    <div class="columns medium-12 large-12" >
         
        <!--password checker-->
        <script type="text/javascript">

          function checkForm(form)
          {
            
            if(form.password.value != "" && form.password.value == form.confirm_password.value) {
              if(form.password.value.length < 8) {
                document.getElementById("passwordError").innerHTML = "Password must contain at least 8 characters!";
                form.password.focus();
                return false;
              }
              if(form.password.value == form.username.value) {
                document.getElementById("passwordError").innerHTML = "Password must be different from Userid!";
                form.password.focus();
                return false;
              }
              re = /[0-9]/;
              if(!re.test(form.password.value)) {
                document.getElementById("passwordError").innerHTML = "Password must contain at least one number (0-9)!";
                form.password.focus();
                return false;
              }
              re = /(?=.*[~`!@#$%^&*()_+={}|\;:"'<>,./?])/;
              if(!re.test(form.pwd1.value)) {
                document.getElementById("passwordError").innerHTML = "Password must contain at least one special characters!";
                form.pwd1.focus();
                return false;
              }
              re = /[a-z]/;
              if(!re.test(form.password.value)) {
                document.getElementById("passwordError").innerHTML = "Password must contain at least one lowercase letter (a-z)!";
                form.password.focus();
                return false;
              }
              re = /[A-Z]/;
              if(!re.test(form.password.value)) {
                document.getElementById("passwordError").innerHTML = "Password must contain at least one uppercase letter (A-Z)!";
                form.password.focus();
                return false;
              }
            } else {
              document.getElementById("passwordError").innerHTML = "Error: Please check your password, they don't match!";
              form.password.focus();
              return false;
            }

            //alert("You entered a valid password: " + form.password.value);
            //return true;
          }
        </script>
        <!--password checker-->
        <form action="" method="POST" data-abide onsubmit="return checkForm(this);" style="padding-top: 2rem;width: 50rem;margin-left:auto;margin-right:auto;">
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
                    <div class="medium-6 large-6 columns">
                    <label style="color: #fff;">Name <small></small></label>
                        <select style="height: 2.4rem;font-size: 1rem;font-weight: bold;" name="name" >
                            <option style="text-transform: capitalize" value="">Select here</option>
                            <?php
                            //query for the filter results
                            $result = DB::query('SELECT * FROM `staff` ORDER BY names ASC');

                            foreach ($result as $row) {
                                ?>
                                    <option style="width: auto;" value="<?php echo $row['names'];?>|<?php echo $row['email'];?>|<?php echo $row['phone'];?>"><?php echo $row['names'];?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="medium-6 large-6 columns end">
                        <label style="color: #fff;">User id<small></small>
                            <input name="username" type="text" placeholder=" e.g. omondiv" />
                        </label>
                    </div>
                </div>

                <div class="row" style="background-color: #00688B;">
                    <div class="medium-6 large-6 columns end">
                        <label style="color: #fff;">Department<small></small>
                            <select style="height: 2.4rem;font-size: 1rem;font-weight: bold;" name="department" >
                                <option style="text-transform: capitalize" value="">Select here</option>
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
                    </div>
                    <div class="medium-6 large-6 columns end" style="background-color: #00688B;">
                        <label style="color: #fff;">Designation<small></small>
                            <input type="text" list="designation" name="designation" />
                            <datalist id="designation">
                                <?php
                                //query for the filter results
                                $result = DB::query('SELECT * FROM `designation` ORDER BY entity ASC');

                                foreach ($result as $row) {
                                    ?>
                                        <option style="width: auto;" value="<?php echo $row['entity'];?>"><?php echo $row['entity'];?></option>
                                    <?php
                                    }
                                ?>
                            </datalist>
                        </label>
                    </div>
                </div>


                <div class="row" style="background-color: #00688B;">
                    <div class="medium-6 large-6 columns error">
                        <label style="color: #fff;">Password
                            <input name="password" type="password" required >
                        </label>
                         <span class="error" id="passwordError"></span>
                    </div>

                    <div class="medium-6 large-6 columns end">
                        <label style="color: #fff;">Confirm Password
                          <input name="confirm_password" type="password" required>
                        </label>
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
                            <input type="radio" style="width:1rem;" name="implementer" value="yes" >Yes
                            <input type="radio" style="width:1rem;" name="implementer" value="no">No
                            <input id="ifNo"  type="hidden"/>
                        </label>
                    </div>
                    <div class="medium-10 large-10 columns end">
                        <label style="color: #fff;">
                            Do you authorize forms?
                            <input type="radio" style="width:1rem;" name="authorizer" value="yes" >Yes
                            <input type="radio" style="width:1rem;" name="authorizer" value="no">No
                        </label>
                    </div>
                    <div class="medium-10 large-10 columns end">
                        <label style="color: #fff;">
                            Are you a line manager?
                            <input type="radio" style="width:1rem;" name="line_manager" value="yes" >Yes
                            <input type="radio" style="width:1rem;" name="line_manager" value="no">No
                        </label>
                    </div>
                </div>
                <div class="row" style="background-color: #00688B;">
                    <button style="margin-left: 1rem;" class="tiny round" type="submit" name="signup">Sign Up</button>
                </div>
            </div>    
        </form>
    </div>
        </section>
        <!--tab 2 login-->
    </div>
</div>



            

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

<?php

//login script
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $find_user = "SELECT * FROM users WHERE userid='$username'";
    $result = mysqli_query($conn, $find_user) or die('Error'.mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);

    /*-------------------------------------------------------------
        Getting the value from the database
        &  
        salting,hashing of the password from the form
    -------------------------------------------------------------*/
    $stored_salt = $row['salt'];
    $stored_hash = $row['password'];
    $check_pass = $stored_salt . $password;
    $check_hash = hash('sha512',$check_pass);

    /*-------------------------------------------------------------
        Comparing the two hashed values
    -------------------------------------------------------------*/
    $sess_authorizer = $row['authorizer'];
    $sess_implementer = $row['implementer'];

    if($check_hash == $stored_hash){
        $_SESSION['sess_username'] = $username;
        $_SESSION['sess_authorizer'] = $sess_authorizer;
        $_SESSION['sess_implementer'] = $sess_implementer;
        echo '<script>window.location.href = "forms.php";</script>';
    } else {
        echo "<script>alert('Email or password is not correct, try again!')</script>";
    }

    mysqli_close($conn); //Close the connection to the DB
};


if(isset($_POST['signup'])) {

    $names = explode('|', $_POST['name']);
    $staffname = $names[0];
    $staffemail = $names[1];
    $staffphone = $names[2];
    $staffname = mysqli_real_escape_string($conn, $staffname);
    $staffemail = mysqli_real_escape_string($conn, $staffemail);
    $staffphone = mysqli_real_escape_string($conn, $staffphone);


    $staffname = $names[0];
    $splitname = explode(" ",$staffname);
        $initials = "";

        foreach ($splitname as $s) {
                $initials .= $s[0];
        }
    //$email = $_POST['email'];
    //$phone = $_POST['phone'];
    $userid = $_POST['username'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $password = $_POST['password'];
    $authorizer = $_POST['authorizer'];
    $implementer = $_POST['implementer'];
    $line_manager = $_POST['line_manager'];

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
    $sql = "INSERT INTO `users`(`names`, `initials`, `email`, `phone`, `userid`, `department`, `designation`, `password`, `salt`, `authorizer`, `implementer`, `line_manager`) VALUES ( '$staffname', '$initials', '$staffemail','$staffphone','$userid','$department','$designation','$hashed_pwd', '$user_salt','$authorizer','$implementer','$line_manager' )";
         
         if (!mysqli_query($conn,$sql)) {
                die('Error: ' . mysqli_error($conn));
            }

            mysqli_close($conn);
            //page redirect after posting
            echo '<script>window.location.href = "index.php";</script>';
    
}


include_once ('php/footer.php');
?>