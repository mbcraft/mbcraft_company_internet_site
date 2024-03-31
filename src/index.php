<?php

require_once('include/lang.php');
include_once("include/begin_html.php");

include_once("content/index/".$lang.".php");
include_once("include/meta.php");
?>
</head>
<body style="background-image:url('/images/background/welcome_background.jpg');background-size: cover;">
    <?php
    include_once("include/language_switches.php");
    ?>
    <script type="text/javascript">
        background_keys = ['white','bamboo_atlas','carpet_loop','ceramic_herringbone','ceramic_triangle','ground_grass_field','ice','marble_whitened','wood_flooring_ash_brick_bond'];
        function update_selected_background(name) {
            for (i=0;i<background_keys.length;i++) {
                el = document.getElementById(background_keys[i]);
                el.className = "unselected background_image_thumb";
            }
            el = document.getElementById(name);
            el.className = "selected";
            document.getElementById('BACKGROUND').value = name;
        }
    </script>
    <div class="w3-row">
    <?=$content ?>
    </div>
    <div class="w3-row w3-display-container">
        <div class="w3-container w3-display-middle">
        P.IVA/VAT N. : 02475790396<br />
        C.F. : BGNMRC82H03E730O
        </div>
    </div>

<?php
include_once("include/end_html.php");
?>