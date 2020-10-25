<?php

include 'admin_header.php';

$op = 'Choice';

if (isset($_POST['op'])) {
    $op = trim($_POST['op']);
} elseif (isset($_GET['op'])) {
    $op = trim($_GET['op']);
}

function Choice()
{
    global $xoopsModule;

    xoops_cp_header();

    OpenTable();

    echo "<a href='" . XOOPS_URL . '/modules/system/admin.php?fct=preferences&op=showmod&mod=' . $xoopsModule->getVar('mid') . "'>" . _AC_Edit . '</a><br>';

    CloseTable();

    xoops_cp_footer();
}

switch ($op) {
    default:
        Choice();
        break;
}
