<?php
include('../../util/main.php');
include('../../view/header.php');
include('../../view/nav.php');
?>

<main>
  <!-- Pricing -->
  <section
    id="about"
    class="d-flex py-5 justify-content-center align-items-center text-center"
  >
    <div class="section-text-box">
      <div class="section-heading">
        <h1>About Us</h1>
      </div>
      <div class="section-text">
        <!-- BS Slideshow -->
        <div
          id="carouselExampleControls"
          class="carousel slide  w-50 mx-auto"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/zah-pizza-php/public/img/about_slideshow/pizza-gal.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="/zah-pizza-php/public/img/about_slideshow/more-pizza-friends.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="/zah-pizza-php/public/img/about_slideshow/pizza-friends.jpg" class="d-block w-100" alt="..." />
            </div>
			<div class="carousel-item">
              <img src="/zah-pizza-php/public/img/about_slideshow/pizza-dude.jpg" class="d-block w-100" alt="..." />
            </div>
			<div class="carousel-item">
              <img src="/zah-pizza-php/public/img/about_slideshow/sad-pizza-gal.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div id="about-us" class="my-2 p-5">
          <h2>About Zah! Industries</h2>
          <p class="lead">
            We here at Zah! Industries pride ourselves on our ability to make
            mediocre pizza at unreasonable prices! From our humble beginnings in
            Derek's mom's basement, we set out to shake up the status quo and
            create something revolutionary. Our original vision of building a
            car that runs on mozeralla didn't pan out (the smell...), so we
            settled on making pizza instead because Derek worked at a local
            pizza shop over the summer, so you could say he had experience.
          </p>
          <p class="lead">
            You may be asking yourself, "Has Zah! lost touch with its roots?"
            Well that couldn't be further from the truth! We're still operating
            out of Derek's mom's basement to this day (thanks Nancy!), and we've
            been able to grow Zah! Industries into a multi-hundred dollar
            corporation. With double the employees that we started with (that's
            4 now), and 50% year-over-year improvement in customer satisfaction
            ratings (50% of 0 is still 0...). Zah! is here to stay!
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include('../../view/footer.php'); ?>