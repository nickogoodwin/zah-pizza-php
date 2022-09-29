<main class="bg-dark">
  <!-- Pricing -->
  <section
    id="error"
    class="d-flex py-5 justify-content-center align-items-center text-center"
  >
    <div class="section-text-box">
      <div class="section-heading">
        <h1>Error</h1>
      </div>
      <div class="section-text" style="border: solid 2px red">
        <p><?php echo $error_message?></p>
      </div>
    </div>
  </section>
</main>

<?php
include('../view/footer.php');
?>