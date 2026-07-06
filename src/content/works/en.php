<?php

$title_suffix = "Works";

$description = "My works: philosophy, fun and documents.";
$keywords = "works, philosophy, fun, documents";

ob_start();
?>
<h1>
    My works (philosophy, fun, documents) are now collected on <a href="https://www.philosophy-ideas.net">www.philosophy-ideas.net</a>.
</h1>
<div style="text-align:center;margin-top:20px;">
    <a href="https://www.philosophy-ideas.net">
        <img src="/images/logo/philosophy_ideas_logo.png" alt="Philosophy Ideas logo" style="width:100%;max-width:320px;height:auto;" />
    </a>
</div>
<?php

$content = ob_get_contents();
ob_end_clean();
?>
