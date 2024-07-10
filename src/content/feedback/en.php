<?php

$title_suffix = "Feedback";

$description = "Send a feedback about a content of this internet site.";
$keywords = "feedback, errors or problems found, MBCRAFT";

ob_start();
?>
            <input type="hidden" id="language" name="language" value="English">
            <h2>
            <label for="page">Your full name, your nickname or your e-mail (required for replies) : <span style="color:red;">*</span></label>
            </h2>
            <h3>
            <input type="text" name="who" required>    
            </h3>
            <h2>
            <label for="page">Page or section in which you found some problems or errors : <span style="color:red;">*</span></label>
            </h2>
            <h3>
            <input type="radio" id="page_philosophy" name="page" <?= $element_type=='philosophy' ? "checked" : "" ?> value="Filosofia">
            <label for="page_philosophy">Philosophy</label>
            <input type="radio" id="page_fun" name="page" <?= $element_type=='fun' ? "checked" : "" ?> value="Divertimento">
            <label for="page_fun">Fun</label>
            <input type="radio" id="page_files" name="page" <?= $element_type=='file' ? "checked" : "" ?> value="File">
            <label for="page_files">File</label>
            <input type="radio" id="page_other" name="page" <?= $element_type=='other' ? "checked" : "" ?> value="Altro">
            <label for="page_other">Other</label>
            </h3>
            <h2>
            <label for="reference">Reference to the item (alphanumeric id, document name ...) : <span style="color:red;">*</span></label>
            </h2>
            <input type="text" name="reference" required value="<?=$element_id ?>">
            <h2>
            <label for="description">Description of problem (if necessary to include or you're willing to write it) :</label>
            </h2>
            <textarea id="description" name="description" rows="10" cols="80"></textarea>
            <h2>            
            <label for="email">Captcha (insert the number in the following field) : <!-- Don't worry, nobody is logging your accesses to this internet site ... and surely server side beside what you're going to read now in this html there are not dangerous procedures if you try to crack this captcha ... go tranq! ... --><span style="font-weight:bold;color:orange;"><?=$captcha_html ?></span> <span style="color:red;">*</span></label>
            </h2>
            <input type="text" name="control_code" value="" required>
            <input type="hidden" name="hidden_control_code_check" value="<?=$hidden_control_code_check ?>" />
            <br />
            <br />
            <h2>
            <div align="center">
                <button type="submit">Send feedback</button>
            </div>
            </h2>
<?php
$content = ob_get_contents();
ob_end_clean();

?>