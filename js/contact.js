/******
	Nicko Goodwin
	Created on 1/27/2022

	1/27/2022
		-wrote js for Contact & Newsletter Signup

******/

// jquery without the jquery
const $ = (selector) => document.querySelector(selector);

document.addEventListener('DOMContentLoaded', () => {
	// hide #email-confirmation-div on page-load
	const email2Div = $('#email-confirmation-div');
	email2Div.style.display = 'none';

	$('#newsletter').addEventListener('change', () => {
		// if user want's to sign up for the newsletter, they must confirm their email
		if ($('#newsletter').checked) {
			email2Div.style.display = 'flex';
		} else {
			email2Div.style.display = 'none';
		}
	});

	$('#contact-form-submit').addEventListener('click', () => {
		const name = $('#name');
		const email1 = $('#email');
		const email2 = $('#email-confirmation');
		const phone = $('#phone');

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
		if ($('#newsletter').checked) {
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
			//if user is signing up for newsletter, go to that page, otherwise, thank them for contacting us
			if ($('#newsletter').checked) {
				$('#contact-form').action = 'join_newsletter.html';
				$('#contact-form').submit();
			} else {
				$('#contact-form').action = 'contacted_us.html';
				$('#contact-form').submit();
			}
		} else {
			alert(errorMessage);
		}
	});
});
