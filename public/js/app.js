/******
	Nicko Goodwin
	Created on 1/21/2022

	1/27/2022
		-added js for Newsletter Signup

	1/28/2022
		-added rollover image js

	2/10/2022
		-rewrote this whole thing using jquery because the original was interfering 
		with my footer time-display code

	2/16/2022
		-removed function declaration in image rollover hovers and used arrow functions instead

	9/16/2022
		-removed jQuery dependencies
******/

/*
	HOMEPAGE
*/
const updatePricing = () => {
	console.log('updatePricing ran')
	//set default values
	let basicPrice = 49.99;
	let deluxePrice = 59.99;
	let ultimatePrice = 69.99;

	//get/update range slider value
	let toppings = document.querySelector('#toppings-slider').value;
	let output = document.querySelector('#toppings-output');
	
	//update toppings-output with value of slider
	output.textContent = toppings;

	//calculate dollar amount for pricing cards($2.00 per topping)
	let amount = toppings * 2;

	//update pricing
	document.querySelector('#basic-price').textContent= `$${(basicPrice + amount).toFixed(2)}/mo`;
	document.querySelector('#deluxe-price').textContent =`$${(deluxePrice + amount).toFixed(2)}/mo`;
	document.querySelector('#ultimate-price').textContent = `$${(ultimatePrice + amount).toFixed(2)}/mo`;
};

if (document.querySelector('#toppings-slider')) {
	document.querySelector('#toppings-slider').addEventListener("input",updatePricing)
}

/*
	CONTACT FORM
*/
if (document.querySelector('#email-confirmation-div')) {
	// hide #email-confirmation-div on page-load
	let email2Div = document.querySelector('#email-confirmation-div');
	let newsletterInput = document.querySelector('#newsletter');
	email2Div.style.display='none';

	newsletterInput.addEventListener('change', () => {
		// if user want's to sign up for the newsletter, they must confirm their email
		if (newsletter.checked) {
			email2Div.style.display = 'flex';
		} else {
			email2Div.style.display = 'none';
		}
	});

	document.querySelector('#contact-form-submit').addEventListener('click', () => {
		const name = document.querySelector('#name');
		const email1 = document.querySelector('#email');
		const email2 = document.querySelector('#email-confirmation');
		const phone = document.querySelector('#phone');

		//regex patterns
		const emailPattern = /^[\w\.\-]+@[\w\.\-]+\.[a-zA-Z]+$/;
		const phonePattern = /^\d{3}-\d{3}-\d{4}$/;

		//boolean to track valid entries
		let isValid = true;
		//variable to hold an error message
		let errorMessage = '';

		//check user entries
		if (name.value == '') {
			errorMessage += 'Full Name is required!\n';
			isValid = false;
		}
		if (email1.value == '' || !emailPattern.test(email1.value)) {
			errorMessage += 'Please enter a valid email\n';
			isValid = false;
		}
		if (phone.value && !phonePattern.test(phone.value)) {
			errorMessage += 'Phone must be in NNN-NNN-NNNN format.';
			isValid = false;
		}
		if (document.querySelector('#newsletter').checked) {
			if (email2.value == '') {
				errorMessage += 'Please confirm your email address!\n';
				isValid = false;
			}
			if (email1.value != email2.value) {
				errorMessage += 'Emails do not match!';
				isValid = false;
			}
		}

		//if no errors, submit form
		if (isValid) {
			document.querySelector('#contact-form').submit();
		} else {
			alert(errorMessage);
		}
	});
};




/*
	FOOTER
*/
if (document.querySelector('#time-display')) {
	setInterval(() => {
		let today = new Date();
		let dateString = today.toDateString();
	
		let hours = today.getHours();
		//format for AM/PM
		let ampm = hours >= 12 ? 'PM' : 'AM';
		hours = hours % 12;
		if (hours == 0) {
			hours = 12;
		}
	
		let minutes = today.getMinutes();
		minutes = minutes <= 9 ? '0' + minutes : minutes;
	
		let seconds = today.getSeconds();
		seconds = seconds <= 9 ? '0' + seconds : seconds;
		
		let timeDisplay = document.querySelector('#time-display')
		timeDisplay.textContent = `${dateString} ${hours}:${minutes}:${seconds} ${ampm}`;
	}, 1000);
}
