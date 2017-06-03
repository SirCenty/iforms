<?php
include_once ('php/header.php');
?>


<div class="columns medium-12 large-12" style="background-color: #00688B;">
<label style="color: #fff;padding-bottom: 2rem;padding-top: 1rem;font-size: 1.2rem;text-align: center;"><b><u>NETWORK ACCESS AUTHORIZATION FORM</u></b></label>

    <form name="form" class="form" action="preview.php" method="POST">
        
        <div class="row">
            <div class="columns" style="background-color: white;">
              
            <div style="padding: 10px;">
                <h3 style="color:#000;font-size: 1rem;"><b><u>TYPE OF REQUEST</u></b></h3>
                <input style="width: 2rem;" type="radio" name="type_of_user" value="New User" required> NEW USER
                <input style="width: 2rem;" type="radio" name="type_of_user" value="Update/Modify User">UPDATE/MODIFY USER 
                <input style="width: 2rem;" type="radio" name="type_of_user" value="Temporary Access">TEMPORARY ACCESS
            </div>
                
            </div>
        </div>
      
       
       
        <div class="row" style="padding-top: 2rem;">
            <h3 style="color:#fff;font-size: 1rem;"><b>SYSTEM ACCESS</b></h3>
            <table  border="3" class="table" cellspacing="5" width="100%">
            
            <!-- DOMAIN SECTION START HERE-->
            <tbody>
                <th style="background-color:#00425f;color: #fff;"> DOMAINS</th>
                <tr>
                     
<?php
    $systemsql = mysqli_query($conn, "SELECT * FROM systems WHERE type = 'DOMAINS' LIMIT 4");
    //$values = mysqli_fetch_assoc($systemsql);

    foreach ($systemsql as $row) {
        $id = $row['id'];
    ?>
    <td><label><b><u><?php echo $row['entity']?></u></b></label></br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="Admin" >admin</br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="User" >user</br>
    </td>
    <?php 
    }
?>
                </tr>
            
            
            <!-- DATABASE SECTION START HERE-->
            <tr>  
                <th style="background-color:#00425f;color: #fff;" > DATABASES</th>
                
                    <tr>
                        <td style="background-color:#00425f;color: #ee3132;"><strong><u>ORACLE</u></strong></td>
                    </tr>
                    <tr>
                     
<?php
    $systemsql = mysqli_query($conn, "SELECT * FROM systems WHERE type = 'ORACLE DATABASES' LIMIT 4");
    //$values = mysqli_fetch_assoc($systemsql);

    foreach ($systemsql as $row) {
        $id = $row['id'];
    ?>
    <td><label><b><u><?php echo $row['entity']?></u></b></label></br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="Admin" >admin</br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="User" >user</br>
    </td>
    <?php 
    }
?>
                    </tr>
                    <tr>
                        <td style="background-color:#00425f;color: #ee3132;"><strong><u>SQL</u></strong></td>
                    </tr>
                    <tr>

                     
<?php
    $systemsql = mysqli_query($conn, "SELECT * FROM systems WHERE type = 'SQL DATABASES' LIMIT 4");
    //$values = mysqli_fetch_assoc($systemsql);

    foreach ($systemsql as $row) {
        $id = $row['id'];
    ?>
    <td><label><b><u><?php echo $row['entity']?></u></b></label></br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="Admin" >admin</br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="User" >user</br>
    </td>
    <?php 
    }
?>


                    </tr>
                    <tr>
<?php
    $systemsql = mysqli_query($conn, "SELECT * FROM systems WHERE type = 'SQL DATABASES' ORDER BY sid DESC LIMIT 2 ");
    //$values = mysqli_fetch_assoc($systemsql);

    foreach ($systemsql as $row) {
        $id = $row['id'];
    ?>
    <td><label><b><u><?php echo $row['entity']?></u></b></label></br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="Admin" >admin</br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="User" >user</br>
    </td>
    <?php 
    }
?>
                    </tr>
            
            
            <!-- DEVICES SECTION START HERE-->
            <tr>
                <th style="background-color:#00425f;color: #fff;" > DEVICES</th>
                <tr>
<?php
    $systemsql = mysqli_query($conn, "SELECT * FROM systems WHERE type = 'DEVICES' LIMIT 4 ");
    //$values = mysqli_fetch_assoc($systemsql);

    foreach ($systemsql as $row) {
        $id = $row['id'];
    ?>
    <td><label><b><u><?php echo $row['entity']?></u></b></label></br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="Admin" >admin</br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="User" >user</br>
    </td>
    <?php 
    }
?>
                    
                </tr>
            </tr> 
            
            
            <!-- SYSTEM SECTION START HERE-->
            <tr>
                <th style="background-color:#00425f;color: #fff;" >SYSTEMS</th>

                <tr>
<?php
    $systemsql = mysqli_query($conn, "SELECT * FROM systems WHERE type = 'SYSTEMS' LIMIT 4 ");
    //$values = mysqli_fetch_assoc($systemsql);

    foreach ($systemsql as $row) {
        $id = $row['id'];
    ?>
    <td><label><b><u><?php echo $row['entity']?></u></b></label></br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="Admin" >admin</br>
        <input style="width: auto;" type="radio" name="<?php echo $row['name']?>" value="User" >user</br>
    </td>
    <?php 
    }
?>
                </tr>
            </tr>
            
            <tr>
                <th><label><b><u>Reason*</u></b> (why do you need access to the request(s) above?)</label></th>
                <td colspan="5"><textarea rows="3" cols="150" name="purpose" required=""></textarea></td>
            </tr>
            
            
            </table>
        </div>
        <div class="columns">
            <input class="tiny button right" type="Submit" name="form_preview" value="[Preview]" />
            <input class="tiny button left" type="Reset" value="[Reset]" />
        </div>
    </form> 
</div>

<?php
include_once ('php/footer.php');
?>