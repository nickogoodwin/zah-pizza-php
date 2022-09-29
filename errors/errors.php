<p>home/index.php</p>

<?php
include('../view/header.php');
include('../view/nav.php');
?>
<main>
    <section id="error">
        <?php echo $error_message?>
    </section>
</main>

<?php
include('../view/footer.php');
?>