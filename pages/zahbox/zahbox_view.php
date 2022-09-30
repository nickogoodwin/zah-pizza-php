<main>
			<!-- Build your Zah Box -->
			<section
				id="build-your-box"
				class="d-flex py-5 justify-content-center align-items-center text-center"
			>
				<div class="section-text-box" id="zah-box-builder">
					<div class="section-heading">
						<h1>Build your Zah Box</h1>
					</div>
					<div class="section-text">
						<h2>Select from the options below to build your Zah Box</h2>
						<!-- Zah Box Builder -->
						<div class="box-builder my-5 row">
							<!-- Input -->
							<div class="col-8 text-start">
								<!-- Size -->
								<div id="size-selector" class="box-builder-section">
									<h3>Select your size <span id="size-error">*</span></h3>

									<input type="radio" name="size" id="small" value="small" />
									<label for="small">Basic - Small - $49.99</label>
									<br />

									<input type="radio" name="size" id="medium" value="medium" />
									<label for="medium">Deluxe - Medium - $59.99</label>
									<br />

									<input type="radio" name="size" id="large" value="large" />
									<label for="large">Ultimate - Large - $69.99</label>
									<br />
								</div>

								<!-- Toppings -->
								<div id="topping-selector" class="box-builder-section">
									<fieldset>
										<h3>Choose your toppings</h3>
										<p>$2.00 each</p>
										<div class="row">
											<div class="col-lg-4">
												<input
													type="checkbox"
													name="toppings"
													id="pepperoni"
													value="pepperoni"
												/>
												<label for="pepperoni"> Pepperoni</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="mushroom"
													value="mushroom"
												/>
												<label for="mushroom">Mushroom</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="sausage"
													value="sausage"
												/>
												<label for="sausage">Sausage</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="black-olive"
													value="black-olive"
												/>
												<label for="black-olive">Black Olive</label>
												<br />
											</div>
											<div class="col-lg-4">
												<input
													type="checkbox"
													name="toppings"
													id="tomato"
													value="tomato"
												/>
												<label for="tomato">Tomato</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="onion"
													value="onion"
												/>
												<label for="onion">Onion</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="chicken"
													value="chicken"
												/>
												<label for="chicken">Chicken</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="basil"
													value="basil"
												/>
												<label for="basil">Basil</label>
												<br />
											</div>
											<div class="col-lg-4">
												<input
													type="checkbox"
													name="toppings"
													id="bacon"
													value="bacon"
												/>
												<label for="bacon">Bacon</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="extra-cheesse"
													value=""
												/>
												<label for="extra-cheese">Extra Cheese</label>
												<br />

												<input
													type="checkbox"
													name="toppings"
													id="green-pepper"
													value=""
												/>
												<label for="green-pepper">Green Pepper</label>
												<br />

												<input type="checkbox" name="toppings" id="garlic" />
												<label for="garlic">Garlic</label>
												<br />
											</div>
										</div>
									</fieldset>
								</div>

								<!-- Salad -->
								<div id="salad-selector" class="box-builder-section">
									<h3>Select your salad <span id="salad-error">*</span></h3>
									<p>add $2.50</p>

									<input
										type="radio"
										name="salad"
										id="regular"
										value="regular"
									/>
									<label for="regular">Regular Salad</label>
									<br />

									<input
										type="radio"
										name="salad"
										id="mediterranean"
										value="mediterranean"
									/>
									<label for="mediterranean">Mediterranean Salad</label>
									<br />

									<input
										type="radio"
										name="salad"
										id="spinach"
										value="spinach"
									/>
									<label for="spinach">Spinach</label>
									<br />

									<input
										type="radio"
										name="salad"
										id="salad-none"
										value="none"
									/>
									<label for="none">None</label>
									<br />
								</div>

								<!-- Drink -->
								<div id="drink-selector" class="box-builder-section">
									<h3>
										Select your drink
										<span id="drink-error">*</span>
									</h3>
									<p>add $3.00</p>

									<input type="radio" name="drink" id="soda" value="soda" />
									<label for="soda">Soda</label>
									<br />

									<input type="radio" name="drink" id="milk" value="milk" />
									<label for="milk">Milk</label>
									<br />

									<input type="radio" name="drink" id="water" value="water" />
									<label for="water">Water</label>
									<br />

									<input
										type="radio"
										name="drink"
										id="drink-none"
										value="none"
									/>
									<label for="drink-none">None</label>
									<br />
								</div>

								<!-- Note -->
								<div id="note-section" class="box-builder-section">
									<h3>Note</h3>
									<textarea name="note" id="note"></textarea>
								</div>

								<!-- Buttons -->
								<div id="buttons" class="box-builder-section text-center">
									<input id="add-to-box" type="button" value="Add To Zah Box" />
								</div>
							</div>

							<!-- Output -->
							<div class="col-lg-4 d-flex align-items-center">
								<div class="box-builder-section output-section">
									<h3>Your Zah Box</h3>
									<textarea
										name="output"
										id="output"
										cols="30"
										rows="15"
										disabled
									></textarea>
									<input
										type="button"
										name="clear-box"
										id="clear-box"
										value="Clear Zah Box"
									/>
								</div>
							</div>
						</div>

						<!-- Place Your Order -->
						<div class="place-order">
							<h1>Place Your Order</h1>
							<div>
								<label for="email">E-Mail:</label>
								<input type="text" name="email" id="email" />
								<span></span>
							</div>
							<div>
								<label for="phone">Mobile phone:</label>
								<input type="text" name="phone" id="phone" />
								<span></span>
							</div>
							<div>
								<label for="zip">ZIP Code:</label>
								<input type="text" name="zip" id="zip" />
								<span></span>
							</div>
							<div>
								<label for="dob">Date of Birth:</label>
								<input type="text" name="dob" id="dob" />
								<span></span>
							</div>
							<div>
								<label for="card">Credit Card #:</label>
								<input type="text" name="card" id="card" />
								<span></span>
							</div>
							<div>
								<label for="cc_date">Expire Date:</label>
								<input type="text" name="cc_date" id="cc_date" />
								<span></span>
							</div>
							<div>
								<label></label>
								<input type="button" id="save" value="Place Order" />
							</div>
						</div>
					</div>
				</div>

				<!-- Thank You section -->
				<div class="section-text-box" id="thank-you">
					<div class="section-heading">
						<h1>Thank You!</h1>
					</div>
					<div class="section-text">
						<h2>Thank you for your order!</h2>
						<img src="/zah-pizza-php/public/img/delivery2.jpg" alt="pizza delivery" />
						<p class="lead">Your Zah box will arrive on wednesday!</p>
						<p class="lead">
							Don't even worry that we didn't ask you for a shipping address, we
							know where you are. &#128065;&#128065;
						</p>
					</div>
				</div>
			</section>
		</main>
		<script defer src="/zah-pizza-php/public/js/build.js"></script>
		<script defer src="/zah-pizza-php/public/js/place_order.js"></script>