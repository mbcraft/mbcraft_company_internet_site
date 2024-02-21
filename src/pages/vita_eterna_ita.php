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
        ISTRUZIONI : FAI CLICK SULL'IMMAGINE PER PASSARE A QUELLA SUCCESSIVA. CLICCA SU 'INIZIA' PER COMINCIARE.
        <div style="width:100%;padding-bottom:2000px;">
            <a href="#img_1"><h1 style="text-align:center;font-size:200px;">INIZIA</h1></a>
        </div>
        <hr />
        <div id="img_1" align="center">
            <a href="#img_2">
                <img src="/images/meme/meme_vita_eterna/ita/vita_eterna_1_ita.jpg" width="1100" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_2" align="center">
            <a href="#img_3">
                <img src="/images/meme/meme_vita_eterna/ita/vita_eterna_2_ita.jpg" width="1100" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_3" align="center">
            <a href="#img_4">
                <img src="/images/meme/meme_vita_eterna/ita/vita_eterna_3_ita.jpg" width="1100" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_4" align="center">
            <a href="#img_5">
                <img src="/images/meme/meme_vita_eterna/ita/vita_eterna_4_ita.jpg" width="1100" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_5" align="center">
            <a href="#img_6">
                <img src="/images/meme/meme_vita_eterna/ita/vita_eterna_5_ita.jpg" width="1100" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_6" align="center">
            <a href="#img_7">
                <img src="/images/meme/meme_vita_eterna/ita/vita_eterna_6_ita.jpg" width="1100" style="padding-top:100px;padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_7" align="center">
            <a href="#begin_of_page">
                <img src="/images/meme/meme_vita_eterna/ita/vita_eterna_7_ita.png" width="1100" style="padding-top:100px;"/>
                CLICCA SULL'IMMAGINE PER TORNARE ALL'INIZIO.
            </a>
        </div>
    </div>
</div>
<?php
include_once("../include/footer.php");
include_once("../include/end_content.php");
include_once("../include/end_html.php");
?>