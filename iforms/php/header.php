<?php
session_start();
if (!isset($_SESSION['sess_username']) || (trim($_SESSION['sess_username']) == '')) {
  header("location: index.php");
exit();
};

include_once ('config.php');
include_once ('meekrodb.2.2.class.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
  <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
  <title>ISW Authorization</title>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Interswitch Reception" />
  
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <link rel="stylesheet" href="css/foundation.css"/>
  <script src="java/jquery-ui-1.10.3/jquery-1.9.1.js"></script>
  <script src="java/jquery-ui-1.10.3/jquery-1.10.2.js"></script>
  

  <script type="text/javascript">
     function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
          $('#imgupload').attr('src', e.target.result);
         }
          reader.readAsDataURL(input.files[0]);
         }
      }
  </script>
	
  <style type="text/css">

      .columnlist {
        columns: 3;
        margin-bottom: 0px;
        list-style: none outside none;
      }


    .marquee {
      height: 500px;
      overflow: hidden;
      border: 1px solid #ccc;
      background: #ccc;
    }

    .input[type="text"] {
      margin: 0 0 1px 0;
      }

    button, .button {
      background-color: #333333;}
    button.small, .button.small {
      padding-top: 0.2rem;
      padding-right: 1.2rem;
      padding-bottom: 0.2rem;
      padding-left: 1.2rem;
      font-size: 0.8125rem; }
    .panel{
      border-style: none;
    }
    .contain-to-grid .top-bar {
      max-width: 100%;
    }
    select
    {
      padding: 0.4px;
      height: auto;
    }
    /*.columns
    {
      padding: 3px 1px 0px 2px ;
    }*/
    .orbit-container{
      height: 500px;
      width: 100%;
    }
		a:hover { 
      background-color: #dddddd;
    }

    .nav1:hover { 
      background-color: #333333;
    }

    .icons:hover{
      background-color: rgba(184, 211, 11, 0.22);
    }

    .thumb {
        display: block;
        overflow: hidden;
    }

    .thumb img {
        display: block; /* Otherwise it keeps some space around baseline */
        min-width: 100%;    /* Scale up to fill container width */
        min-height: 100%;   /* Scale up to fill container height */
        -ms-interpolation-mode: bicubic; /* Scaled images look a bit better in IE now */
    }

    .tabs dd > a, .tabs .tab-title > a{
            outline: none;   /*remove tab outline blue*/
      }
	</style>
</head>

<body style="zoom:85%;height: 100%;">
  <nav class="top-bar" style="height:auto;max-width: 100%;margin: 0px;background-color: #fff" data-topbar role="navigation" data-options="sticky_on: small">
        <ul class="title-area" style="margin-bottom: 0.8rem;">
          <li class="name">
            <img src="images/ilogo.png" style="margin-left: 2rem;padding: 0.8rem;">
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span> </span></a></li>
        </ul>


        <section class="top-bar-section" style="margin-right: 2rem;padding: 0.8rem;">


            <?php
            if (isset($_SESSION['sess_username']) || (trim($_SESSION['sess_username']) == '')) {
              ?>
                <ul class="right" >
                  <li><a href="account.php" style="background:#fff;color: #003f5d;font-size: 1.2rem;" onmouseover="this.style.backgroundColor='#fff'" onmouseout="this.style.backgroundColor='#fff'"><?php echo $_SESSION['sess_username']; ?></a></li>
                  <li><a href="logout.php" style="background:#fff;color: #003f5d;font-size: 1.2rem;" >Log out</a><li>
                </ul>
            <?php
            }else{
              ?>

            <ul class="tabs right" data-tab role="tablist">
              <li class="tab-title active" role="presentation"><a href="#login" role="tab" tabindex="0" aria-selected="false" aria-controls="login" style="background:#fff;color: #003f5d;" onmouseover="this.style.backgroundColor='#fff'" onmouseout="this.style.backgroundColor='#fff'">Login</a></li>
              <li class="tab-title" role="presentation"><a href="#signup" role="tab" tabindex="0" aria-selected="true" aria-controls="signup"  style="background:#fff;color: #003f5d;" onmouseover="this.style.backgroundColor='#fff'" onmouseout="this.style.backgroundColor='#fff'">Sign up</a><li>
            </ul>

            <?php
            }
            ?>

        </section>
      </nav>


<div class="container1"  style="height:100%;background-color:#00688B;">

    <!--sub nav-->
    <div class="contain-to-grid sticky">
      <nav class="top-bar" style="width:100%;padding-left: 1.7rem" data-topbar role="navigation" data-options="sticky_on: small">
        <ul class="title-area">
          <li class="name">
            <h1><a href="forms.php" class="nav1">Forms</a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span> </span></a></li>
        </ul>

        <section class="top-bar-section" >
          <!-- left Nav Section -->
          <ul class="left">


             <?php
              if ($_SESSION['sess_authorizer'] == 'yes' && $_SESSION['sess_implementer'] == 'no') {
              ?>

                <li><a href="requests.php" >Requests</a></li>
                <li><a href="authrequests.php" >Authorize</a></li>

              <?php
              } else if ($_SESSION['sess_authorizer'] == 'no' && $_SESSION['sess_implementer'] == 'yes') {
              ?>

                <li><a href="requests.php" >Requests</a></li>
                <li><a href="implement.php" >Implement</a></li>
              
              <?php
              } else if ($_SESSION['sess_authorizer'] == 'yes' && $_SESSION['sess_implementer'] == 'yes') {
              ?>

                <li><a href="requests.php" >Requests</a></li>
                <li><a href="authrequests.php" >Authorize</a></li>
                <li><a href="implement.php" >Implement</a></li>

              <?php
              } else if ($_SESSION['sess_authorizer'] == 'no' && $_SESSION['sess_implementer'] == 'no') {
              ?>
                <li><a href="requests.php" >Requests</a></li>

              <?php
              }
            ?>
            
          </ul>
        </section>

        
      </nav>
    </div>