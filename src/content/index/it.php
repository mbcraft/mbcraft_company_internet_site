<?php

$title_suffix = "Benvenuto in MBCRAFT";

$description = "MBCRAFT è un'azienda unipersonale che lavora nella ricerca e sviluppo di software.";
$keywords = "mbcraft, azienda";

ob_start();
?>
<div align='center' style="padding-top: 30px;">
    <div style="padding:30px;">Benvenuto nel sito web di</div>
    <img width="300" src='/images/logo/logo_mbcraft_final_black.png' alt='Logo MBCRAFT' />
    <br />
    <h3>
    <span style="color:green;">Questo sito web &egrave; responsive e i suoi contenuti testuali sono anche comodamente visibili e consultabili da smartphone.</span><br />
    <span style="color:red;">Non &egrave; presente un cookie banner in quanto sono utilizzati solo cookie tecnici.<br /> Non ci sono contatori delle visite.</span>
    </h3>
    <div style="padding-top:40px;"><h3>Scegli lo sfondo che preferisci :</h3></div>
    <?php 
        include('_background_list.php'); 
    ?>
    <form method="POST" name="background_enter_form" action="/home.php">
        <input id="BACKGROUND" type="hidden" name="BACKGROUND" value="white" />
        <input class="enter_button" type="submit" value="Entra" />
    </form>
</div>
    <br />
    <div align="center">
    <h4>Ultimo aggiornamento : 21/03/2024</h4>
    </div>
    <br />
    <br />

<?php
$content = ob_get_contents();
ob_end_clean();
?>
