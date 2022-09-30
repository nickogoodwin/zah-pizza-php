<main>
      <!-- Contact & Newsletter Signup -->
      <section
        id="contact"
        class="d-flex py-5 justify-content-center align-items-center text-center"
      >
        <div class="section-text-box">
          <div class="section-heading">
            <h1>Contact Us</h1>
          </div>
          <div class="section-text">
            <form
              id="contact-form"
              class="p-5"
              method="POST"
              action='/zah-pizza-php/pages/contact/'
              name="Contact Form"
            >
            <input type="hidden" name="action" value='submit_contact_form'>

              <h3>Questions? Concerns?</h3>
              <p class="lead">(Want to sign up for our newsletter?)</p>
              <p class="lead">Please fill out this form</p>
              <!-- Full Name -->
              <div class="row">
                <div class="col-2 d-flex justify-content-center">
                  <i class="bi bi-person"></i>
                </div>
                <div class="col-10">
                  <div class="form-floating mb-5">
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      id="name"
                      placeholder="Full Name"
                    />
                    <label for="name">Full Name<span>*</span></label>
                  </div>
                </div>
              </div>

              <!-- Email -->
              <div class="row">
                <div class="col-2 d-flex justify-content-center">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="col-10">
                  <div class="form-floating mb-5">
                    <input
                      type="email"
                      class="form-control text-dark"
                      name="email"
                      id="email"
                      placeholder="Email Address"
                    />
                    <label for="email">Email Address<span>*</span></label>
                  </div>
                </div>
              </div>

              <!-- Phone -->
              <div class="row">
                <div class="col-2 d-flex justify-content-center">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="col-10">
                  <div class="form-floating mb-5">
                    <input
                      type="tel"
                      class="form-control"
                      name="phone"
                      id="phone"
                      placeholder="Phone"
                    />
                    <label for="phone">Phone</label>
                    <p style="text-align:left">Please enter your phone number in XXX-XXX-XXXX format.</p>
                  </div>
                </div>
                
              </div>

              <!-- Message -->
              <div class="row mb-5">
                <div
                  class="col-2 d-flex justify-content-center align-items-center"
                >
                  <i class="bi bi-pencil-square"></i>
                </div>
                <div class="col-10">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      name="message"
                      id="message"
                      maxlength="255"
                    ></textarea>
                    <label for="message">Write message here</label>
                  </div>
                </div>
              </div>

              <!-- Newsletter -->
              <div class="row mb-5">
                <div
                  class="col-2 d-flex justify-content-center align-items-center"
                >
                  <i class="bi bi-newspaper"></i>
                </div>
                <div class="col-10 text-start top-50 m-0">
                  <input type="checkbox" name="newsletter" id="newsletter"/>
                  <label for="newsletter">Sign up for our newsletter?</label>
                </div>
              </div>

              <!-- Email Confirmation -->
              <div class="row" id="email-confirmation-div">
                <div class="col-2 d-flex justify-content-center">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="col-10">
                  <div class="form-floating mb-5">
                    <input
                      type="email"
                      class="form-control text-dark"
                      name="email-confirmation"
                      id="email-confirmation"
                      placeholder="Email Address"
                    />
                    <label for="email">Please confirm your email address</label>
                  </div>
                </div>
              </div>

              <!-- Submit -->
              <div class="row">
                <div
                  class="col d-flex justify-content-center align-items-center"
                >
                  <button
                    id="contact-form-submit"
                    type="button"
                    class="btn text-white my-5"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>