<?php
include_once ('php/header.php');
?>

<div class="columns medium-12 large-12" style="background-color: #00688B;height: 100%;padding-bottom: 2rem;">

<?php
  $loginsql = mysqli_query($conn, "SELECT * FROM users WHERE userid = '".$_SESSION['sess_username']."' LIMIT 1");

      foreach ($loginsql as $value) {
      
      ?>



  <div class="columns"  style="margin-bottom: 2rem; padding-top: 1.2rem;padding-left: 4rem; background-color: #f3f8fd;">
    <H1 style="font-size:1.0rem;"><b><u>Name</u>: <?php echo $value['names']; ?></b></H1>
  </div>

  <?php
}
?>

  <div class="columns" style="padding-top: 1.2rem;padding-left: 4rem; background-color: #f3f8fd;margin-bottom: 10px">
      <ul class="tabs" data-tab role="tablist" style="zoom:85%;">
        <li class="tab-title active" role="presentation"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-2">Details</a></li>
      </ul>
      <div class="tabs-content"">
         <!--tab 2 login-->
        <section style="padding-bottom: 6rem;background-color: #00688b;" role="tabpanel" aria-hidden="true" class="content active" id="panel2-2">
          <div class="columns" style=" width: 100%;padding-left: 5rem; background-color: #00425f;">

             <?php
                              //display content            
                              //query for the filter results
                              $loginsql = mysqli_query($conn, "SELECT * FROM users WHERE userid = '".$_SESSION['sess_username']."'");

                              foreach ($loginsql as $row) {
                                  $id = $row['id'];
                                  ?>

                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Userid: <b style="font-size: 1.2rem;"><?php echo $row['userid'];?></p>
                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Email: <b style="font-size: 1.2rem;"><?php echo $row['email'];?></b><button class="tiny radius right" style="margin-left: 3rem;margin-bottom: 0rem;font-size: 1.2rem;padding-top:0.2rem;padding-bottom:0.2rem;background-color: #e5231d;">Edit</button></p>
                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Phone: <b style="font-size: 1.2rem;"><?php echo $row['phone'];?></b><button class="tiny radius right" style="margin-left: 3rem;margin-bottom: 0rem;font-size: 1.2rem;padding-top:0.2rem;padding-bottom:0.2rem;background-color: #e5231d;">Edit</button></p>
                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Designation: <b style="font-size: 1.2rem;"><?php echo $row['designation'];?></b><button class="tiny radius right" style="margin-left: 3rem;margin-bottom: 0rem;font-size: 1.2rem;padding-top:0.2rem;padding-bottom:0.2rem;background-color: #e5231d;">Edit</button></p>
                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Department: <b style="font-size: 1.2rem;"><?php echo $row['department'];?></b><button class="tiny radius right" style="margin-left: 3rem;margin-bottom: 0rem;font-size: 1.2rem;padding-top:0.2rem;padding-bottom:0.2rem;background-color: #e5231d;">Edit</button></p>
                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Line Manager: <b style="font-size: 1.2rem;"><?php echo $row['line_manager'];?></b></p>
                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Authorizer: <b style="font-size: 1.2rem;"><?php echo $row['authorizer'];?></b></p>
                      <p style="font-size:1.1rem;width:30rem;color: #fff;margin-bottom: 0.5rem;zoom:85%;">Implementer: <b style="font-size: 1.2rem;"><?php echo $row['implementer'];?></b></p>
            <?php
            }
            ?>
          </div>
        </section>
        <!--tab 2 login-->
      </div>
  </div>

</div>

<?php
include_once ('php/footer.php');
?>
