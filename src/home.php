<?php

require_once('include/lang.php');
include_once("include/begin_html.php");
require_once("content/home/".$lang.".php");
include_once("include/meta.php");
include_once("include/begin_content_with_language_switches.php");
include_once("include/menu.php");
include_once("include/top_poem.php");
?>
<div id="main_content" class="content">
    <br />
    <br />
    <div class="box_large">
        <?php
        //generate_black_or_colored_logo_html();
        ?>
        <br />
        <?= $content ?>
    </div>
    <br />
    <br />
    <div class="box_small">
        <b>
            <address>
                MBCRAFT di Marco Bagnaresi<br />
                Via ca' del vento, 11<br />
                CAP 48012 - Bagnacavallo (RA) - ITALY<br />
            </address>
            P.IVA/VAT N. : 02475790396<br />
            C.F. : BGNMRC82H03E730O<br />
            Standard Mail : info [ @ ] mbcraft [ . ] it<br />
            PEC : mbcraft [ @ ] pec [ . ] it<br />
        </b>
    </div>
</div>
<?php
include_once("include/footer.php");
include_once("include/end_content.php");
include_once("include/end_html.php");
?>