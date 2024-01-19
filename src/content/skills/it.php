<?php
$title_suffix = "Competenze";

$description = "Elenco delle competenze acquisite nel corso degli anni da Marco Bagnaresi";
$keywords = "competenze, tecnologie, MBCRAFT";

ob_start();
?>
<div>
    <h1 class="title">Competenze informatiche :</h1>

    <h2>Analisi progettuale per lo sviluppo di software :</h2>
    <h3>
        <ul>
            <li>Analisi dei requisiti</li>
            <li>Progettazione del database</li>
            <li>Progettazione delle integrazioni</li>
            <li>Progettazione della business logic</li>
            <li>Analisi dei dettagli di grandi/medie dimensioni (alcuni piccoli dettagli emergono in fase di sviluppo)</li>
        </ul>
    </h3>

    <h2>Sviluppo di software :</h2>
    <h3>
        Conoscenza dei seguenti linguaggi/tecnologie :<br />
        <ul>
            <li>C (conoscenze medio-avanzate)</li>
            <li>C++ (conoscenze medio-avanzate)</li>
            <li>Java (conoscenze medio-avanzate)</li>
            <li>PHP (esperto)</li>
            <li>JavaScript (conoscenze medie)</li>
            <li>Ruby (conoscenza basilare)</li>
            <li>Lua (solo qualche prova)</li>
            <li>HTML (conoscenze medie)</li>
            <li>CSS (conoscenza basilare)</li>
            <li>MySql/MariaDB (conoscenze medio-avanzate)</li>
        </ul>
        <br />
        Conoscenza del sistema operativo linux e windows comunemente utilizzati come ambienti di lavoro (vari programmi da linea di comando, configurazione base del sistema).
        <br />
        Refactoring, design patterns.
        <br />
        Altre competenze IT : suite OpenOffice, Git, Software OCR, Gimp.
        <br /><br />
    </h3>
    <h2>Conoscenza delle lingue :</h2>
    <h3>
        <ul>
            <li>Italiano : madrelingua</li>
            <li>Inglese : Livello B</li>
        </ul>
    </h3>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();
?>