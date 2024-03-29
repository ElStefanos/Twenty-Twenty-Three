<?php
use paging\editor;
$theme->addModule("Menu", THEME_MODULES_DIR . "menu.mod.php");
$theme->addModule("Footer", THEME_MODULES_DIR . "footer.mod.php");
?>


<div class="scene" style="z-index: 0; position: relative;">
    <?php
    if (isset($_GET['editPage'])) {
        $editor = new editor(array());
        $editor->loadPageEdit($_GET['editPage']);
    } else if (isset($_GET['preview'])) {
        echo $paging->loadPreview($_GET['preview'], $_GET['page']);
    } else {
        echo $paging->getPage(true, true, "paging");
    }
    ?>
</div>



