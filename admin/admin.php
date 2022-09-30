<?php
include('view/header.php');
include('view/nav.php');

?>
<main class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2">
        <?php include('view/sidenav.php');?>
        </div>
        
 
        <div class="col py-3">
            Left Sidebar with Submenus
            An example 2-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single menu is be open at a time. While the sidebar itself is not toggle-able, it does responsively shrink in width on smaller screens.
        </div>
    </div>
</main>

<?php
include('view/footer.php')
?>