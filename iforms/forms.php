<?php
include_once ('php/header.php');
?>


<div class="columns medium-12 large-12" style="background-color: #00688B;">
<label style="color: #fff;padding-bottom: 2rem;padding-top: 1rem;font-size: 1.2rem;text-align: center;"><b><u>NETWORK ACCESS AUTHORIZATION FORM</u></b></label>

    <form name="form" class="form" action="preview.php" method="POST">
        
        <div class="row">
            <!--h3 style="color:#fff;font-size: 1rem;"><b>SECTION A - STAFF REQUIRING ACCESS</b></h3-->
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
                    <td><label><b><u>PAYNET</u></b></label></br>
                    <input style="width: auto;" type="radio" name="paynet" value="Admin" >admin</br>
                    <input style="width: auto;" type="radio" name="paynet" value="User" >user</br>
                    </td>
                    <td><label><b><u>INTERSWITCH</u></b></label></br>
                    <input style="width: auto;" type="radio" name="interswitch" value="Admin">admin</br>
                    <input style="width: auto;" type="radio" name="interswitch" value="User">user</br>
                    </td>
                    <td><label><b><u>PAYNETSLAN</u></b></label></br>
                    <input style="width: auto;" type="radio" name="paynetslan" value="Admin">admin</br>
                    <input style="width: auto;" type="radio" name="paynetslan" value="User">user</br>
                    </td>
                    <td><label><b><u>INTERSWITCHGROUP</u></b></label></br>
                    <input style="width: auto;" type="radio" name="interswitchgroup" value="Admin">admin</br>
                    <input style="width: auto;" type="radio" name="interswitchgroup" value="User">user</br>
                    </td>
                </tr>
            
            
            <!-- DATABASE SECTION START HERE-->
            <tr>  
                <th style="background-color:#00425f;color: #fff;" > DATABASES</th>
                
                    <tr>
                        <td style="background-color:#00425f;color: #ee3132;"><strong><u>ORACLE</u></strong></td>
                    </tr>
                    <tr>
                        <td><label><b><u>PRIME</u></b></label></br>
                            <input style="width: auto;" type="radio" name="prime" value="Admin" >admin</br>
                            <input style="width: auto;" type="radio" name="prime" value="User" >user</br>
                        </td>
                        <td><label><b><u>ONLINE</u></b></label></br>
                            <input style="width: auto;" type="radio" name="online" value="Admin">admin</br>
                            <input style="width: auto;" type="radio" name="online" value="User">user</br>
                        </td>
                        <td><label><b><u>FRAUDGUARD</u></b></label></br>
                            <input style="width: auto;" type="radio" name="fraudguard" value="Admin">admin</br>
                            <input style="width: auto;" type="radio" name="fraudguard" value="User">user</br>
                        </td>
                        <td><label><b><u>IST</u></b></label></br>
                            <input style="width: auto;" type="radio" name="ist" value="Admin">admin</br>
                            <input style="width: auto;" type="radio" name="ist" value="User">user</br>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#00425f;color: #ee3132;"><strong><u>SQL</u></strong></td>
                    </tr>
                    <tr>
                        <td><label><b><u>INTSQLSRV</u></b></label></br>
                            <input style="width: auto;" type="radio" name="intsqlsrv" value="Admin" >admin</br>
                            <input style="width: auto;" type="radio" name="intsqlsrv" value="User" >user</br>
                        </td>
                        <td><label><b><u>INTSQLSRV1</u></b></label></br>
                            <input style="width: auto;" type="radio" name="intsqlsrv1" value="Admin">admin</br>
                            <input style="width: auto;" type="radio" name="intsqlsrv1" value="User">user</br>
                        </td>
                        <td><label><b><u>OFFICE DB-LIVE</u></b></label></br>
                            <input style="width: auto;" type="radio" name="officedb" value="Admin">admin</br>
                            <input style="width: auto;" type="radio" name="officedb" value="User">user</br>
                        </td>
                        <td><label><b><u>REALTIME-DB-LIVE</u></b></label></br>
                            <input style="width: auto;" type="radio" name="realtimedb" value="Admin">admin</br>
                            <input style="width: auto;" type="radio" name="realtimedb" value="User">user</br>
                        </td>
                    </tr>
                    <tr>
                        <td><label><b><u>CENCON</u></b></label></br>
                            <input style="width: auto;" type="radio" name="cencon" value="Admin" >admin</br>
                            <input style="width: auto;" type="radio" name="cencon" value="User" >user</br>
                        </td>
                        <td><label><b><u>ENTSQLSRV</u></b></label></br>
                            <input style="width: auto;" type="radio" name="entsqlsrv" value="Admin">admin</br>
                            <input style="width: auto;" type="radio" name="entsqlsrv" value="User">user</br>
                        </td>
                    </tr>
            
            
            <!-- DEVICES SECTION START HERE-->
            <tr>
                <th style="background-color:#00425f;color: #fff;" > DEVICES</th>
                <tr>
                    <td><label><b><u>ROUTER</u></b></label></br>
                        <input style="width: auto;" type="checkbox" name="partner_router" value="User" >Partner Router</br>
                        <input style="width: auto;" type="checkbox" name="internet_router" value="User" >Internet Router</br>
                    </td>
                    <td><label><b><u>FIREWALL</u></b></label></br>
                        <input style="width: auto;" type="checkbox" name="meraki_fw" value="User">Meraki</br>
                        <input style="width: auto;" type="checkbox" name="juniper_fw" value="User">Juniper</br>
                    </td>
                    <td><label><b><u>ACCESS CONTROL</u></b></label></br>
                        <input style="width: auto;" type="checkbox" name="office_access" value="User">OFFICE</br>
                        <input style="width: auto;" type="checkbox" name="cde_access" value="User">CDE</br>
                    </td>
                </tr>
            </tr> 
            
            
            <!-- SYSTEM SECTION START HERE-->
            <tr>
                <th style="background-color:#00425f;color: #fff;" >SYSTEMS</th>

                <tr>
                    <td><label><b><u>PASTEL</u></b></label></br>
                        <input style="width: auto;" type="radio" name="pastel" value="Admin" >admin</br>
                        <input style="width: auto;" type="radio" name="pastel" value="User" >user</br>
                    </td>
                    <td><label><b><u>TERMINAL SERVER</u></b></label></br>
                        <input style="width: auto;" type="radio" name="terminal_server" value="Admin" >admin</br>
                        <input style="width: auto;" type="radio" name="terminal_server" value="User" >user</br>
                    </td>
                    <td><label><b><u>INTRANET</u></b></label></br>
                        <input style="width: auto;" type="radio" name="intranet" value="Admin" >admin</br>
                        <input style="width: auto;" type="radio" name="intranet" value="User" >user</br>
                    </td>
                    <td><label><b><u>TRANWALL TC</u></b></label></br>
                        <input style="width: auto;" type="radio" name="tranwall_tc" value="Admin" >admin</br>
                        <input style="width: auto;" type="radio" name="tranwall_tc" value="Support" >support</br>
                        <input style="width: auto;" type="radio" name="tranwall_tc" value="User" >user</br>
                        <input style="width: auto;" type="radio" name="tranwall_tc" value="Limited" >limited</br>
                    </td>
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