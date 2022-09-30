/**Nicko Goodwin
 * Created on 2/10/2022
 *
 * 2/10/2022
 *  -wrote js for place-order form
 */
'use strict';

const isDate = (date, datePattern, typeOfDate) => {
	if (!datePattern.test(date)) {
		return false;
	}

	if (typeOfDate == 'mm/dd/yyyy') {
		const dateParts = date.split('/');
		const month = parseInt(dateParts[0]);
		const day = parseInt(dateParts[1]);

		if (month < 1 || month > 12) {
			return false;
		}
		if (day > 31) {
			return false;
		}
		return true;
	}
	if (typeOfDate == 'mm/yyyy') {
		const ccDateParts = date.split('/');
		const ccMonth = parseInt(ccDateParts[0]);

		if (ccMonth < 1 || ccMonth > 12) {
			return false;
		} else {
			return true;
		}
	}
};

const placeOrder = () => {
	// clear any previous error messages
	let errorEls = document.querySelectorAll('.place-order span');
	errorEls.forEach((errorEl) => {
		errorEl.textContent = ''
	})

	const emailEl = document.querySelector('#email');
	const phoneEl = document.querySelector('#phone');
	const zipEl = document.querySelector('#zip');
	const dobEl = document.querySelector('#dob');
	const cardEl = document.querySelector('#card');
	const cardDateEl = document.querySelector('#cc_date');
	
	// get values entered by user
	let email = emailEl.value;
	let phone = phoneEl.value;
	let zip = zipEl.value;
	let dob = dobEl.value;
	let card = cardEl.value;
	let cardDate = cardDateEl.value;

	// regular expressions for validity testing
	const emailPattern = /^[\w\.\-]+@[\w\.\-]+\.[a-zA-Z]+$/;
	const phonePattern = /^\d{3}-\d{3}-\d{4}$/;
	const zipPattern = /^\d{5}(-\d{4})?$/;
	const datePattern = /^[01]?\d\/[0-3]\d\/\d{4}$/;
	//cardPattern = NNNN-NNNN-NNNN-NNNN
	const cardPattern = /\d{4}-\d{4}-\d{4}-\d{4}/;
	//cardDatePattern = MM/YYYY
	const cardDatePattern = /^[01]?\d\/\d{4}/;

	// check user entries for validity
	let isValid = true;
	if (email === '' || !emailPattern.test(email)) {
		isValid = false;
		emailEl.nextElementSibling.textContent = 'Please enter a valid email.'
		emailEl.focus()
	}
	//check phone for validity
	if (phone === '' || !phonePattern.test(phone)) {
		isValid = false;
		phoneEl.nextElementSibling.textContent = 'Please enter a phone number in NNN-NNN-NNNN format.'
		phoneEl.focus()
	}
	//check zip for validity
	if (zip === '' || !zipPattern.test(zip)) {
		isValid = false;
		zipEl.nextElementSibling.textContent = 'Please enter a valid zip code.';
		zipEl.focus()
	}
	//check dob for validity
	if (dob === '' || !isDate(dob, datePattern, 'mm/dd/yyyy')) {
		isValid = false;
		dobEl.nextElementSibling.textContent = 'Please enter a valid date in MM/DD/YYYY format.';
		dobEl.focus()
	}
	// check card for validity
	if (card === '' || !cardPattern.test(card)) {
		isValid = false;
		cardEl.nextElementSibling.textContent = 'Please enter a credit card in NNNN-NNNN-NNNN-NNNN format.'
		cardEl.focus()
	}
	//check cardDate for validity
	if (cardDate === '' || !isDate(cardDate, cardDatePattern, 'mm/yyyy')) {
		isValid = false;
		cardDateEl.nextElementSibling.textContent = 'Please enter a valid date in MM/YYYY format.';
		cardDateEl.focus()
	}

	if (isValid) {
		let orderItems = document.querySelector('#output').value; //change this to grab values from localStorage
		if (orderItems) {
			document.querySelector('#zah-box-builder').style.display = 'none';
			document.querySelector('#thank-you').style.display = 'block';
		} else {
			alert('Please build your Zah Box')
		}
	}

}

let placeOrderBtn = document.querySelector('#save');
placeOrderBtn.addEventListener('click', placeOrder);