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

$(document).ready(() => {
	$('#save').click(() => {
		$('span').text(''); // clear any previous error messages

		// get values entered by user
		const email = $('#email').val();
		const phone = $('#phone').val();
		const zip = $('#zip').val();
		const dob = $('#dob').val();
		const card = $('#card').val();
		const cardDate = $('#cc_date').val();

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
			$('#email').next().text('Please enter a valid email.');
		}
		if (phone === '' || !phonePattern.test(phone)) {
			isValid = false;
			$('#phone')
				.next()
				.text('Please enter a phone number in NNN-NNN-NNNN format.');
		}
		if (zip === '' || !zipPattern.test(zip)) {
			isValid = false;
			$('#zip').next().text('Please enter a valid zip code.');
		}
		if (dob === '' || !isDate(dob, datePattern, 'mm/dd/yyyy')) {
			isValid = false;
			$('#dob').next().text('Please enter a valid date in MM/DD/YYYY format.');
		}
		// check card for validity
		if (card === '' || !cardPattern.test(card)) {
			isValid = false;
			$('#card')
				.next()
				.text('Please enter a credit card in NNNN-NNNN-NNNN-NNNN format.');
		}
		//check cardDate for validity
		if (cardDate === '' || !isDate(cardDate, cardDatePattern, 'mm/yyyy')) {
			isValid = false;
			$('#cc_date').next().text('Please enter a valid date in MM/YYYY format.');
		}

		if (isValid) {
			if ($('#output').val()) {
				$('#zah-box-builder').css('display', 'none');
				$('#thank-you').css('display', 'block');
			} else {
				alert('Please build your Zah Box');
			}
		}

		$('#email').focus();
	});
});
