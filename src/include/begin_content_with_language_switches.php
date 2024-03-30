
</head>
<body>
    <?php
    include_once(__DIR__."/support_functions.php");
    if (!isset($_GET["mode"]) || $_GET["mode"]!="search_with_words") include_once(__DIR__."/language_switches.php");
    include_once(__DIR__."/background.php");
    ?>
    <div id="main_text" style="position:relative;z-index:50;width:100%;height:100%;">
