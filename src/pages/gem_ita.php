<?php


require_once('../include/lang.php');
include_once("../include/begin_html.php");
include_once("../include/meta.php");
include_once("../include/begin_content_with_back_to_fun_page_button.php");
include_once("../include/menu.php");
include_once("../include/top_poem.php");

?>
<div id="main_content" class="content">
	<div class="box_very_large">
        ISTRUZIONI : FAI CLICK SULL'IMMAGINE PER PASSARE A QUELLA SUCCESSIVA. CLICCA SU 'INIZIA' PER COMINCIARE.<br /> <span style="color:red;">CI SONO ALTISSIME PROBABILITA' CHE TU <b>MUOIA</b>. NON MI ASSUMO NESSUNA RESPONSABILITA' A RIGUARDO.</span>
        <div style="width:100%;padding-bottom:2000px;">
            <a href="#img_1"><h1 style="text-align:center;font-size:200px;">INIZIA</h1></a>
        </div>
        <hr />
        <div id="img_1" align="center">
            <a href="#img_2">
                <img src="/images/meme/meme_gem/gem_ita_1.jpg" width="600" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_2" align="center">
            <a href="#img_3">
                <img src="/images/meme/meme_gem/gem_ita_2.jpg" width="600" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_3" align="center">
            <a href="#begin_of_page">
                <img src="/images/meme/meme_gem/gem_ita_3.jpg" width="600" />
            </a>
            <br />
            CLICCA SULL'IMMAGINE PER TORNARE ALL'INIZIO.
            <br />
            <b>OPPURE, SE VUOI UN ALTRO MEME LETALE, <a href="/pages/meme_loser_ita.php">CLICCA QUI</a>.</b>
        </div>
    </div>
</div>
<?php
include_once("../include/footer.php");
include_once("../include/end_content.php");
include_once("../include/end_html.php");
?>