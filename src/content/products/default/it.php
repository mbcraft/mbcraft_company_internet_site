<?php

$title_suffix = "Prodotti";

$description = "Elenco dei prodotti in vendita o delle risorse disponibili presso MBCRAFT";
$keywords = "prodotti, risorse, MBCRAFT";

ob_start();
?>
<br />
<h2>Prodotti o librerie gratuite :</h2>
<h3>
Trovate tutto sul mio <a href="https://www.github.com/mbcraft/">account GitHub</a>.</h3>
<br /><br />
NOTA BENE : questi repository non sono pi&ugrave; seguiti e in molti casi nei vari progetti &egrave; necessario fare alcuni aggiornamenti di sicurezza necessari per usarli.
<?php
$content = ob_get_contents();
ob_end_clean();

?>