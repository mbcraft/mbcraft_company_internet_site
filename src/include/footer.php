<?php

$footer = array("it" => 
    array(
    "<a href=\"https://it.vecteezy.com/vettori-gratis/icona-facebook\">Icona Facebook Vettori di Vecteezy</a>",
    "<a href=\"http://icon-icons.com\">Icona Twitter</a> da Icon Icons con licenza <a href=\"https://creativecommons.org/licenses/by/4.0/\">Creative Commons 4.0</a>",
    "Grazie a <a href='http://openclipart.org'>openclipart.org</a> e <a href='http://texturelib.com'>texturelib.com</a> per le loro immagini.",
    "Immagini usate su licenza di shutterstock.com e poliigon.com.",
    "Il logo di MBCRAFT &egrave; un marchio registrato.",
    "Tutti i contenuti sono originali, scritti e sviluppati da Marco Bagnaresi.",
    "Traduzioni con Google Translate."
    ),
    "en" => array(
    "<a href=\"https://it.vecteezy.com/vettori-gratis/icona-facebook\">Facebook Icon Vettor of Vecteezy</a>",
    "<a href=\"http://icon-icons.com\">Twitter Icon</a> from Icon Icons with <a href=\"https://creativecommons.org/licenses/by/4.0/\">Creative Commons 4.0</a> license",
    "Thanks to <a href='http://openclipart.org'>openclipart.org</a>, <a href='http://texturelib.com'>texturelib.com</a> for their images.",
    "Images used under license of shutterstock.com and poliigon.com.",
    "MBCRAFT logo is a registered trademark.","All content originally written and developed in Italian by Marco Bagnaresi.",
    "Translations by Google Translate.")
    );

$welcome_page = array("it" => "Pagina di benvenuto",
                "en" => "Welcome page");

$send_a_feedback = array("it" => "Link alla form per feedback",
                            "en" => "Link to feedback form");

function print_footer($elements) {
    foreach ($elements as $el) {
        echo "<div style='padding-top:10px;padding-bottom:10px;'>";
        echo $el;
        echo "</div>";
    }
}
?>
<footer>
    <div class="footer">
        <div style="padding-top:32px;padding-bottom:32px;">
            <div style="display: inline-block;">
                <a href="https://www.facebook.com/marco.bagnaresi">
                    <img src="/images/icons/facebook_icon2.png" alt="facebook icon" />
                </a>
            </div>
            <div style="display: inline-block;width:16px;height:64px;">
            </div>
            <div style="display: inline-block;">
                <a href="https://www.facebook.com/mbcraft.it/">
                    <img src="/images/icons/facebook_bw_icon2.png" alt="facebook bw icon" />
                </a>
            </div>
            <div style="display: inline-block;width:16px;height:64px;">
            </div>
            <div style="display: inline-block;">
                <a href="https://www.linkedin.com/in/mbcraft/">
                    <img src="/images/icons/linkedin_icon2.png" alt="linkedin icon" />
                </a>
            </div>
            <div style="display: inline-block;width:16px;height:64px;">
            </div>
            <div style="display: inline-block;">
                <a href="https://www.tiktok.com/@marco.bagnaresi">
                    <img src="/images/icons/tiktok_icon2.png" alt="tiktok icon" />
                </a>
            </div>
            <div style="display: inline-block;width:16px;height:64px;">
            </div>
            <div style="display: inline-block;">
                <a href="https://twitter.com/__MBCRAFT__">
                    <img src="/images/icons/twitter_icon2.png" alt="twitter icon" />
                </a>
            </div>
            <div style="display: inline-block;width:16px;height:64px;">
            </div>
            <div style="display: inline-block;">
                <a href="https://www.github.com/mbcraft/">
                    <img src="/images/icons/github_icon.png" alt="github icon" />
                </a>
            </div>
            <div style="display: inline-block;width:16px;height:64px;">
            </div>
            <div style="display: inline-block;">
                <a href="https://steamcommunity.com/id/mbcraft_it/">
                    <img src="/images/icons/steam_icon.png" alt="steam icon" />
                </a>
            </div>
            <div style="display: inline-block;width:16px;height:64px;">
            </div>
            <div style="display: inline-block;">
                <a href="https://www.twitch.tv/mbcraft_it">
                    <img src="/images/icons/twitch_icon2.png" alt="twitch icon" />
                </a>
            </div>
        </div> 
        <h4>
        <address>
        MBCRAFT di Marco Bagnaresi<br />
        <br /><br />
        Via ca' del vento, 11<br />
        <br /><br />
        CAP 48012 - Bagnacavallo (RA)<br />
        <br /><br />
        Italy<br /><br />
        </address>
        </h4>
        <h3>
        P.IVA/VAT N. 02475790396<br /><br /><br />
        C.F. : BGNMRC82H03E730O<br /><br /><br />

        <br />
        <b><a href="/index.php"><?= $welcome_page[$lang] ?></a></b><br />
        <br /><br />
        <?php
        if (!defined('FEEDBACK_FORM_PAGE')) {
        ?>
        <div>
        <b><a href="/send_feedback.php"><?= $send_a_feedback[$lang] ?> 

        <div style="transform:scale(0.1,0.1);max-width:100px;max-height:100px;position:absolute;display:inline-block;top:280px;">
        <?php
        echo_generated_randomly_filled_feedback_form_logo();
        ?>
        </div></a></b>
        </div>
        <?php
        }
        ?>
        </h3>
        <h4>
        <?php
            print_footer($footer[$lang]);
        ?>
        </h4>
        <div style="width:100%;height:50px;"></div>
    </div>
    <br />
</footer>