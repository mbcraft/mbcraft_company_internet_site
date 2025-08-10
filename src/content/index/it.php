<?php

$title_suffix = "Benvenuto in MBCRAFT";

$description = "MBCRAFT è un'azienda unipersonale che lavora nella ricerca e sviluppo di software.";
$keywords = "mbcraft, azienda";

ob_start();

require_once ("include/site_variables.php");

?>
<div align='center' style="padding-top: 30px;">
    <div style="padding:30px;">Benvenuto nel sito internet di</div>
    <img width="300" src='/images/logo/logo_mbcraft_final_black.png' alt='Logo MBCRAFT' />
    <br />

    <br />
    <a href="/about.php">Altre informazioni</a>
    <br />
    <div style="padding-top:40px;"><h3>Scegli lo sfondo che preferisci :</h3></div>
    <?php 
        include('_background_list.php'); 

        if (!$is_open) {
    ?>
    <span style="font-size: 40px;font-weight: bold;">NON ENTRARE !</span>
    <br />
    <img src="/images/misc/skull_and_bones.png" width="100"/>
    <br />
    <span style="font-size: 20px;font-weight: bold;">( QUESTO SITO INTERNET &Egrave; CHIUSO )</span>
    <br />
    <?php
        }
    ?>
    <form method="POST" name="background_enter_form" action="/home.php">
        <input id="BACKGROUND" type="hidden" name="BACKGROUND" value="white" />
        <input class="enter_button" type="submit" value="Entra" <?=$is_open ? '' : 'disabled'?>/>
    </form>
</div>
    <br />
    <div align="center">
    <h4>Ultimo aggiornamento : 10 Agosto 2025</h4>
    </div>
    <br />
    <br />


<?php
$content = ob_get_contents();
ob_end_clean();
?>
