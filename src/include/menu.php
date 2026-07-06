<?php
$skip_to_content = array("it"=>"Vai al contenuto","en" => "Skip to content");
$menu = array("it" => array("HOME","COMPETENZE","ESPERIENZE","WORKS"),"en" => array("HOME","SKILLS","EXPERIENCES","WORKS"));
?>
<h4 class="skip_to_content_wrapper">
    <a id="skip_to_main_content" href="#main_content"><?=$skip_to_content[$lang] ?></a>
</h4>
<nav>
    <p class="menu_title">Menu:</p>

    <!-- Desktop menu -->
    <div class="w3-cell-row w3-light-blue menu desktop_menu" style="min-width:100%;">
        <a href="/home.php"        class="w3-cell w3-cell-middle menu_item yellow"><?=$menu[$lang][0] ?></a>
        <a href="/skills.php"      class="w3-cell w3-cell-middle menu_item orangewhite"><?=$menu[$lang][1] ?></a>
        <a href="/experiences.php" class="w3-cell w3-cell-middle menu_item pink"><?=$menu[$lang][2] ?></a>
        <a href="/works.php"       class="w3-cell w3-cell-middle menu_item darkgreen"><?=$menu[$lang][3] ?></a>
    </div>

    <!-- Mobile menu -->
    <div class="mobile_menu">
        <button class="hamburger_btn" onclick="toggleMobileMenu()" aria-expanded="false" aria-controls="mobile_nav_items">
            Menu
        </button>
        <div class="mobile_nav_items" id="mobile_nav_items">
            <a href="/home.php"        class="mobile_menu_item yellow"><?=$menu[$lang][0] ?></a>
            <a href="/skills.php"      class="mobile_menu_item orangewhite"><?=$menu[$lang][1] ?></a>
            <a href="/experiences.php" class="mobile_menu_item pink"><?=$menu[$lang][2] ?></a>
            <a href="/works.php"       class="mobile_menu_item darkgreen"><?=$menu[$lang][3] ?></a>
        </div>
    </div>
</nav>
<script>
function toggleMobileMenu() {
    var items = document.getElementById('mobile_nav_items');
    var btn = document.querySelector('.hamburger_btn');
    var isOpen = items.classList.toggle('open');
    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    btn.textContent = isOpen ? '✕' : 'Menu';
}
</script>
