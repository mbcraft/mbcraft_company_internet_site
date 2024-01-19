<?php

$title_suffix = "Products";

$description = "List of products and resources available from MBCRAFT";
$keywords = "products, resources, MBCRAFT";

ob_start();
?>
<br />
<h2>Free products or libraries :</h2>
<h3>
You can find some open-source software on my <a href="https://www.github.com/mbcraft/">GitHub account</a> .</h3>
<br />
<br />
PLEASE NOTE: these repositories are no longer followed and in many cases in the various projects it is necessary to make some security updates necessary to use them.
<?php
$content = ob_get_contents();
ob_end_clean();
?>