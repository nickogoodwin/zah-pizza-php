<?php
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'render_page';
    }
}  

if ($action == 'render_page') {
    include('admin.php');
}

?>