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
        INSTRUCTIONS : CLICK ON EACH IMAGE TO SEE THE NEXT ONE. CLICK ON 'BEGIN' TO START.<br /> THERE ARE SUPER HIGH CHANCES THAT YOU WILL <b>DIE</b> (but less than the Italian version).
        <div style="width:100%;padding-bottom:2000px;">
            <a href="#img_1"><h1 style="text-align:center;font-size:200px;">START</h1></a>
        </div>
        <hr />
        <div id="img_1" align="center">
            <a href="#img_2">
                <img src="/images/meme/meme_gem/gem_eng_1.jpg" width="500" />
                <b>
                    <div style="width:200px;">
                        <ol>
                            <li>Scratch and die</li>
                        </ol>
                    </div>
                </b>
                <div style="padding-bottom:1900px;"></div>
            </a>
        </div>
        <div id="img_2" align="center">
            <a href="#img_3">
                <img src="/images/meme/meme_gem/gem_eng_2.jpg" width="500" style="padding-bottom:2000px;"/>
            </a>
        </div>
        <div id="img_3" align="center">
            <a href="#begin_of_page">
                <img src="/images/meme/meme_gem/gem_eng_3.jpg" width="500" />
                <br />
                <div style="width:200px;">
                    <b>
                        <ol>
                            <li>Rain of stones</li>
                            <li>Surprise sabotage</li>
                            <li>Cancer 5 kg</li>
                            <li>Sandwich with tar</li>
                            <li>Rib removal</li>
                            <li>Financial crack</li>
                            <li>Spa in the sewers</li>
                            <li>Obsidian coffin</li>
                        </ol>
                    </b>
                </div>
            </a>
            CLICK ON THE IMAGE TO RETURN TO THE BEGINNING.
            <br />
            <b>OR, IF YOU WANT TO TRY ANOTHER DANGEROUS MEME, <a href="/pages/meme_loser_eng.php">CLICK HERE</a>.</b>
        </div>
    </div>
</div>
<?php
include_once("../include/footer.php");
include_once("../include/end_content.php");
include_once("../include/end_html.php");
?>