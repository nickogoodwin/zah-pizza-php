<?php
include('../../util/main.php');
include('../../view/header.php');
include('../../view/nav.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_contact';
    }
}  

if ($action == 'show_contact') {
    include('contact_view.php');
}

if ($action == 'submit_contact_form') {
    include('../../model/visits.php');
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $message = filter_input(INPUT_POST, 'message');
    $newsletter = filter_input(INPUT_POST, 'newsletter') ? true : false;
    if ($name == NULL || $email == NULL || $phone == NULL)  {
        $error_message = "Please enter all required fields.";
        include('../../errors/errors.php');
    } else {
        add_visit($name, $email, $phone, $message, $newsletter);

        //show a different post-submission page depending on whether they opted into the newsletter or not
        if (!$newsletter) {
            include('contacted_us.php');
        } else {
            include('joined_newsletter.php');
        }
    }
}

include('../../view/footer.php'); 
?>