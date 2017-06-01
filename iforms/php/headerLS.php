<?php
session_start();

include_once ('php/config.php');
include_once ('php/meekrodb.2.2.class.php');
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
  <style type="text/css">
      
      .columnlist {
        columns: 4;
        margin-bottom: 0px;
      }
      .tabs dd > a, .tabs .tab-title > a{
            outline: none;
      }
  </style>
</head>

<body>
<div>

    <!--logo nav band-->
    <div class="contain-to-grid sticky">
      <nav class="top-bar" style="height:auto;max-width: 100%;margin: 0px;background-color: #fff" data-topbar role="navigation" data-options="sticky_on: small">
        <ul class="title-area" style="margin-bottom: 0.8rem;">
          <li class="name">
            <a href="index.php" ><img src="images/ilogo.png" style="margin-left: 2rem;padding: 0.8rem;"></a>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span> </span></a></li>
        </ul>


        <section class="top-bar-section" style="margin-right: 2rem;padding: 0.8rem;">

<ul class="tabs right" data-tab role="tablist">
  <li class="tab-title active" role="presentation" style=""><a href="#login" role="tab" tabindex="0" aria-selected="false" aria-controls="login" style="background:#fff;color: #003f5d;" onmouseover="this.style.backgroundColor='#fff'" onmouseout="this.style.backgroundColor='#fff'">Login</a></li>
  <li class="tab-title" role="presentation"><a href="#signup" role="tab" tabindex="0" aria-selected="true" aria-controls="signup"  style="background:#fff;color: #003f5d;" onmouseover="this.style.backgroundColor='#fff'" onmouseout="this.style.backgroundColor='#fff'">Sign up</a><li>
</ul>

        </section>
      </nav>
    </div>
    <!--logo nav band-->