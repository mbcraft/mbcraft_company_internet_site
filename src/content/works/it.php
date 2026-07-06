<?php

$title_suffix = "Works";

$description = "I miei lavori: filosofia, divertimento e documenti.";
$keywords = "works, filosofia, divertimento, documenti";

ob_start();
?>
<h1>
    I miei lavori (filosofia, divertimento, documenti) sono ora raccolti su <a href="https://www.philosophy-ideas.net">www.philosophy-ideas.net</a>.
</h1>
<div style="text-align:center;margin-top:20px;">
    <a href="https://www.philosophy-ideas.net">
        <img src="/images/logo/philosophy_ideas_logo.png" alt="Logo Philosophy Ideas" style="width:180px;max-width:100%;height:auto;" />
    </a>
</div>
<?php

$content = ob_get_contents();
ob_end_clean();
?>
