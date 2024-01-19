<?php

if (isset($_POST["BACKGROUND"])) $_SESSION["BACKGROUND"] = filter_var($_POST['BACKGROUND'],FILTER_DEFAULT);

$background = isset($_SESSION['BACKGROUND']) ? $_SESSION['BACKGROUND'] : 'white';

$positionX = "-".rand(1,100)."px";
$positionY = "-".rand(1,100)."px";

$body_style = "background-repeat: repeat; background-position: $positionX $positionY;";

?>
<script type="text/javascript">

	var bodyTag = document.getElementsByTagName("body")[0];
    bodyTag.style = '<?= $body_style ?>';
    bodyTag.className = '<?= $background ?>';

</script>