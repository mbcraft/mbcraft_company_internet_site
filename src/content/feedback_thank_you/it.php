<?php

$title_suffix = "Ringraziamento per feedback";

$description = "Ringraziamento del feedback.";
$keywords = "feedback, ringraziamento, MBCRAFT";

$thank_you_statement = array(

"Un gatto ora ti pensa ...","Un'anatra, da qualche parte, guarda le stelle ...","Un criceto ha fatto un disegno della tua faccia nella sua tana ...","Un koala ora sa che pu&ograve; contare anche su di te ...","Un panda rotola gi&ugrave; da un dirupo e infligge 3d6 danni psicologici al tuo peggior nemico ...","Un serpente girer&agrave; in tondo per velocizzare il caricamento delle app che usi ..."
);

$s = $thank_you_statement[rand(0,count($thank_you_statement)-1)];

ob_start();
?>
<div align="center">
	<h1>
	GRAZIE PER AVER INVIATO QUESTO FEEDBACK : <?=$s ?>
	</h1>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();

?>