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
        INSTRUCTIONS : CLICK ON EACH IMAGE TO SEE THE NEXT ONE. CLICK ON 'BEGIN' TO START.
        <hr />
        <div style="width:100%;padding-bottom:2000px;">
            <a href="#img_1"><h1 style="text-align:center;font-size:200px;">BEGIN</h1></a>
        </div>
        <div style="width:100%;padding-bottom:2000px;">
            <a href="#img_1"><h1 style="text-align:center;font-size:200px;">INIZIA</h1></a>
        </div>
        <hr />
        <div style="width:100%;padding-bottom:2000px;">
            <a href="#img_1"><h1 style="text-align:center;font-size:200px;">BEGIN</h1></a>
        </div>
    	<div id="img_1" align="center">
    		<a href="#img_2">
        		<img src="/images/meme/meme_gioco_azzardo/eng/gioco_azzardo_1_eng.jpg" width="600" style="padding-top:100px;padding-bottom:2000px"/>
        	</a>
        </div>
        <hr />
        <div id="img_2" align="center">
        	<a href="#img_3">
        		<img src="/images/meme/meme_gioco_azzardo/eng/gioco_azzardo_2_eng.jpg" width="600" style="padding-top:100px;padding-bottom:2000px"/>
        	</a>
        </div>
        <hr />
        <div id="img_3" align="center" style="text-align:center;">
        	<a href="#begin_of_page">
        		<img src="/images/meme/meme_gioco_azzardo/eng/gioco_azzardo_3_eng.jpg" width="600" style="padding-top:100px;"/>
                <div style="text-align:center;">
                    CLICK ON THE IMAGE TO RETURN TO THE BEGINNING.
                </div>
    		</a>
    		
    	</div>
    </div>
</div>
<?php
include_once("../include/footer.php");
include_once("../include/end_content.php");
include_once("../include/end_html.php");
?>