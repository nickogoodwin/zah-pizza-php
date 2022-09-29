<?php
include('../view/header.php');
include('../view/nav.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'render_page';
    }
}  

if ($action == 'render_page') {
    include('faq_view.php');
}


include('../view/footer.php');
 ?>