<?php

$title_suffix = "Welcome to MBCRAFT";

$description = "MBCRAFT is a one man company that works in software research and development.";
$keywords = "mbcraft, company";

ob_start();
?>
<div align='center' style="padding-top: 30px;">
    <div style="padding:30px;">Welcome to the web site of</div>
    <img width="300" src='/images/logo/logo_mbcraft_final_black.png' alt='Logo MBCRAFT' />
    <br />
    <h3>
    <span style="color:green;">This website is responsive and its textual contents are also easily visible and accessible from smartphones.</span><br />
    <span style="color:red;">There is no cookie banner as there are only technical cookies.<br /> There are no visit counters.</span>
    </h3>
    <div style="padding-top:40px;"><h3>Choose your favorite background :</h3></div>
    <?php 
        include('_background_list.php'); 
    ?>
    <form method="POST" name="background_enter_form" action="/home.php">
        <input id="BACKGROUND" type="hidden" name="BACKGROUND" value="white" />
        <input class="enter_button" type="submit" value="Enter" />
    </form>
</div>
    <br />
    <div align="center">
    <h4>Last update : 18/02/2024</h4>
    </div>
    <br />
    <br />
<?php
$content = ob_get_contents();
ob_end_clean();
?>
