<main>
      <!-- Hero -->
<section
        id="hero"
        class="d-flex px-4 py-5 justify-content-center align-items-center text-center"
      >
        <div id="hero-text-box" class="section-text-box">
          <div class="section-heading">
            <h1>Welcome to Zah!</h1>
            <h2>PaaS: Pizza as a Service.</h2>
          </div>
          <div class="section-text">
            <p class="lead">
              Introducing the worlds first Pizza Subscription Service!
            </p>
            <p class="lead">Probably... (don't google it).</p>
          </div>
        </div>
      </section>

      <!-- Gallery -->
      <section id="gallery">
        <div class="row g-0">
          <div class="container col-4">
            <img class="img-main" id="image1" src="img/rollover/pizza1.jpg" alt="pizza in oven"/>
            <img class="img-hover" id="image2" src="img/rollover/pizza2.jpg" alt="slice o zah" />
          </div>
          <div class="container col-4">
            <img class="img-main" id="image3" src="img/rollover/pizza3.jpg" alt="pizza on paper"/>
            <img class="img-hover" id="image4" src="img/rollover/pizza4.jpg" alt="three pizzas" />
          </div>
          <div class="container col-4">
            <img class="img-main" id="image5" src="img/rollover/pizza5.jpg" alt="pizza with spinach and tomato"/>
            <img class="img-hover" id="image6" src="img/rollover/pizza6.jpg" alt="pizza by fire" />
          </div>
        </div>
        
        <style>
          #gallery .container {
            position: relative;
            max-width: 100%;
          }

          #gallery .container img.img-hover {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            object-fit: containt;
            opacity: 0;
            transition: opacity .2s;
          }

          #gallery .container:hover img.img-hover {
            opacity: 1;
          }


        </style>
      </section>

      <!-- Who Are we? -->
      <section
        id="who"
        class="d-flex px-4 py-5 justify-content-center align-items-center text-center"
      >
        <div class="section-text-box">
          <div class="section-heading">
            <h1>Who Are We?</h1>
          </div>
          <div class="section-text">
            <p class="lead">
              We here at Zah&trade; Industries believe that Pizza is one of the
              major food groups.
            </p>
            <p class="lead">A slice a day keeps the bad feelings at bay!</p>
            <p class="lead">
              To make sure that you're getting your recommended dose, we've made
              it simple and easy to make sure you've always got pizza-on-hand.
            </p>
            <p class="lead">
              Our rates are NOT competitve, because we simply have no
              competition.
            </p>
            <p class="lead">
              Sign up for your Zahbscription&trade; today, while we're still in
              business...
            </p>
            <p class="lead">Nobody does it like Zah!</p>
          </div>
        </div>
      </section>

      <!-- Pricing -->
      <section
        id="pricing"
        class="d-flex py-5 justify-content-center align-items-center text-center"
      >
        <div class="section-text-box">
          <div class="section-heading">
            <h1>Pricing</h1>
          </div>
          <div class="section-text">
            <p class="lead">We have an abundance of toppings to choose from!</p>
            <div id="topping-lists" class="d-flex justify-content-center">
              <div id="topping-list-1">
                <ul class="list-group">
                  <li class="list-group-item">Pepporoni</li>
                  <li class="list-group-item">Mushroom</li>
                  <li class="list-group-item">Extra Cheese</li>
                  <li class="list-group-item">Sausage</li>
                </ul>
              </div>
              <div id="topping-list-2">
                <ul class="list-group">
                  <li class="list-group-item">Black Olives</li>
                  <li class="list-group-item">Green Pepper</li>
                  <li class="list-group-item">Fresh Garlic</li>
                  <li class="list-group-item">Tomato</li>
                </ul>
              </div>
              <div id="topping-list-3">
                <li class="list-group-item">Onion</li>
                <li class="list-group-item">Chicken</li>
                <li class="list-group-item">Fresh Basil</li>
                <li class="list-group-item">And More!</li>
              </div>
            </div>
            <br />

            <div id="calculate-pricing">
              <p class="lead">
                Each topping adds just $2.00 to your monthly subscription!
              </p>
              <p class="lead">How many toppings would you like?</p>
              <div id="pricing-slider" class="bg-white py-2">
                <label for="toppings-slider">Number of Toppings</label>
                <input
                  type="range"
                  name="toppings-slider"
                  id="toppings-slider"
                  value="0"
                  min="0"
                  max="5"
                />
                <output id="toppings-output"></output>
              </div>

              <br />
              <div
                class="container py-5 d-xl-flex justify-content-xl-around align-items-xl-center"
              >
                <div class="card" id="basic">
                  <img src="img/pizza-basic.png" alt="single pizza box" />
                  <div class="card-body">
                    <h4 class="card-title">Basic</h4>
                    <h5 id="basic-price">$49.99/mo</h5>
                    <p class="card-text">One Small Pizza per week</p>
                    <a href="build.html" class="btn"
                      >Start your Zahbscription&trade;</a
                    >
                  </div>
                </div>
                <div class="card" id="deluxe">
                  <img src="img/pizza-deluxe.png" alt="2 pizza boxes" />
                  <div class="card-body">
                    <h4 class="card-title">Deluxe</h4>
                    <h5 id="deluxe-price">$59.99/mo</h5>
                    <p class="card-text">One Medium Pizza per week</p>
                    <a href="build.html" class="btn"
                      >Start your Zahbscription&trade;</a
                    >
                  </div>
                </div>
                <div class="card" id="ultimate">
                  <img src="img/pizza-ultimate.png" alt="3 pizza boxes" />
                  <div class="card-body">
                    <h4 class="card-title">Ultimate</h4>
                    <h5 id="ultimate-price">$69.99/mo</h5>
                    <p class="card-text">One Large Pizzas per week</p>
                    <a href="build.html" class="btn"
                      >Start your Zahbscription&trade;</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      

</main>