<?php

$title_suffix = "Feedback";

$description = "Invia un feedback su un contenuto di questo sito internet.";
$keywords = "feedback, errori o problemi riscontrati, MBCRAFT";

ob_start();
?>
            <input type="hidden" id="language" name="language" value="Italiano">
            <br />
            <h2>
            <label for="page">Il tuo nome completo, il tuo nick o la tua e-mail (necessaria per risposte) : <span style="color:red;">*</span></label>
            </h2>
            <h3>
            <input type="text" name="who" required>    
            </h3>
            <h2>
            <label for="page">Pagina o sezione in cui sono stati riscontrati errori o problemi : <span style="color:red;">*</span></label>
            </h2>
            <h3>
            <input type="radio" id="page_philosophy" name="page" value="Filosofia" <?= $element_type=='philosophy' ? "checked" : "" ?> required>
            <label for="page_philosophy">Filosofia</label>
            <input type="radio" id="page_fun" name="page" value="Divertimento" <?= $element_type=='fun' ? "checked" : "" ?> required>
            <label for="page_fun">Divertimento</label>
            <input type="radio" id="page_files" name="page" value="File" <?= $element_type=='file' ? "checked" : "" ?> required>
            <label for="page_files">File</label>
            <input type="radio" id="page_other" name="page" value="Altro" <?= $element_type=='other' ? "checked" : "" ?> required>
            <label for="page_other">Altro</label>
            </h3>
            <h2>
            <label for="reference">Riferimento all'elemento (id alfanumerico, nome del documento ...) : <span style="color:red;">*</span></label>
            </h2>
            <input type="text" name="reference" required value="<?=$element_id ?>">
            <h2>
            <label for="description">Descrizione del problema (se necessario includerla o hai voglia di scriverla) :</label>
            </h2>
            <textarea id="description" name="description" rows="10" cols="80"></textarea>
            <h2>            
            <label for="email">Captcha (inserisci il numero nel campo sottostante) : <!-- Non preoccuparti, nessuno sta loggando i tuoi accessi a questo sito internet ... e sicuramente anche lato server oltre a quanto stai per leggere in questo html non ci sono procedure pericolose per la tua salute se cerchi di craccare questo captcha ... vai tranq! ... --><span style="font-weight:bold;color:orange;"><?=$captcha_html ?></span> <span style="color:red;">*</span></label>
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