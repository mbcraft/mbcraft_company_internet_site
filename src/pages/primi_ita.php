<?php


require_once('../include/lang.php');
include_once("../include/begin_html.php");
include_once("../include/meta.php");
include_once("../include/begin_content_with_back_to_fun_page_button.php");
include_once("../include/menu.php");
include_once("../include/top_poem.php");

?>
<div id="main_content" class="content">
    <div style="position:relative;">
        <?php    
            $p1 = extract_random_prime_5_digits();
            $p2 = extract_random_prime_5_digits();
        ?>
        <span style="position:absolute;left:55.5%;top:24%;font-size: 2.5vw;font-weight: bold;"><?=$p1 ?>&nbsp;&nbsp;&nbsp;<?=$p2 ?></span>
        <img src="/images/meme/meme_primi/meme_primi_ita.png" width="80%" />
    </div>
</div>
<?php
include_once("../include/footer.php");
include_once("../include/end_content.php");
include_once("../include/end_html.php");
?>