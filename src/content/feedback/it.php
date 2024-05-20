<?php

$title_suffix = "Feedback";

$description = "Invia un feedback su un contenuto di questo sito internet.";
$keywords = "feedback, errori o problemi riscontrati, MBCRAFT";

ob_start();
?>
            <input type="hidden" id="language" name="language" value="Italiano">
            <br />
            <h2>
            <label for="page">Pagina o sezione in cui sono stati riscontrati errori o problemi :</label>
            </h2>
            <h3>
            <input type="radio" id="page_philosophy" name="page" value="Filosofia" required>
            <label for="page_philosophy">Filosofia</label>
            <input type="radio" id="page_fun" name="page" value="Divertimento" required>
            <label for="page_philosophy">Divertimento</label>
            <input type="radio" id="page_files" name="page" value="File" required>
            <label for="page_philosophy">File</label>
            <input type="radio" id="page_other" name="page" value="Altro" required>
            <label for="page_philosophy">Altro</label>
            </h3>
            <h2>
            <label for="reference">Riferimento all'elemento (id alfanumerico, nome del documento ...) :</label>
            </h2>
            <input type="text" name="reference">
            <h2>
            <label for="description">Descrizione del problema (se necessario includerla o hai voglia di scriverla) :</label>
            </h2>
            <textarea id="description" name="description" rows="10" cols="80"></textarea>
            <h2>            
            <label for="email">Codice di controllo (inserisci nel campo sottostante) : <span style="font-weight:bold;color:orange;"><?=$captcha_html ?></span> *</label>
            </h2>
            <input type="text" name="control_code" value="" required>
            <input type="hidden" name="hidden_control_code_check" value="<?=$hidden_control_code_check ?>" />
            <br />
            <br />
            <h2>
            <div align="center">
                <button type="submit">Invia feedback</button>
            </div>
            </h2>
<?php
$content = ob_get_contents();
ob_end_clean();

?>