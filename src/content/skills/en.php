<?php
$title_suffix = "Skills";

$description = "List of skills learned through the years by Marco Bagnaresi";
$keywords = "skills, technologies, MBCRAFT";

ob_start();
?>
<div>
    <h2 class="title">IT Skills :</h2>

    <h3>Project analysis for software development :</h3>
    <ul>
        <li>Requirements analysis</li>
        <li>Database structure</li>
        <li>Integration analysis</li>
        <li>Business logic analysis</li>
        <li>Big/Medium details analysis (some small details are discovered in development phase)</li>
    </ul>

    <h3>Software development :</h3>

    Knowledge of the following programming languages/technologies :<br />
    <ul>
        <li>C (medium-advanced knowledge)</li>
        <li>C++ (medium-advanced knowledge)</li>
        <li>Java (medium-advanced knowledge)</li>
        <li>PHP (expert)</li>
        <li>JavaScript (medium knowledge)</li>
        <li>Ruby (basic knowledge)</li>
        <li>Lua (just some tests)</li>
        <li>HTML (medium knowledge)</li>
        <li>CSS (basic knowledge)</li>
        <li>MySql/MariaDB (medium-advanced knowledge)</li>
    </ul>
    <br />
    Knowledge of Linux and Windows operative systems commonly used as working environments (command line programs, basic system configuration).
    <br />
    Project management, resource management.
    <br />
    Refactoring, design patterns.
    <br />
    Other IT skills : OpenOffice suite, Git, OCR software, Gimp.
    <br /><br />
    <h3>Main and foreign languages :</h3>
    <ul>
        <li>Italian : native language</li>
        <li>English : Level B</li>
    </ul>

</div>
<?php
$content = ob_get_contents();
ob_end_clean();
?>