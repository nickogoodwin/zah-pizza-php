/**Nicko Goodwin
 * Created on 2/8/2022
 *
 * 2/10/2022
 * 	-added clearDisplay
 */
'use strict';

const basicPrice = 49.99;
const deluxePrice = 59.99;
const ultimatePrice = 69.99;
const toppingsPrice = 2.0;
const saladPrice = 2.5;
const drinkPrice = 3.0;

const addItems = () => {
	localStorage.pizzaSize = '';
	localStorage.toppings = '';
	localStorage.salad = '';
	localStorage.drink = '';
	localStorage.note = '';

	let currentPrice = 0.0;

	// Size
	//make sure something is selected
	if ($('#size-selector input[name="size"]:checked').length < 1) {
		$('#size-error').text('You must select a size option!');
	} else {
		$('#size-error').text('*');
		let sizeValue = $('#size-selector input[name="size"]:checked').val();
		switch (sizeValue) {
			case 'small':
				currentPrice += basicPrice;
				break;
			case 'medium':
				currentPrice += deluxePrice;
				break;
			case 'large':
				currentPrice += ultimatePrice;
				break;
		}
		localStorage.pizzaSize = sizeValue;
	}

	// Toppings
	if ($('#topping-selector input[name="toppings"]:checked').length < 1) {
		localStorage.toppings = 'none';
	} else {
		let toppingsValues = $('#topping-selector input[name="toppings"]:checked');
		if (toppingsValues.length > 0) {
			toppingsValues.each((index, element) => {
				localStorage.toppings += `${element.value} `;
				currentPrice += toppingsPrice;
			});
		}
	}

	//Salad
	if ($('#salad-selector input[name="salad"]:checked').length < 1) {
		$('#salad-error').text('You must select a salad option!');
	} else {
		$('#salad-error').text('*');
		let saladValue = $('#salad-selector input[name="salad"]:checked').val();
		localStorage.salad = saladValue;
		if (saladValue != 'none') {
			currentPrice += saladPrice;
		}
	}

	//Drink
	if ($('#drink-selector input[name="drink"]:checked').length < 1) {
		$('#drink-error').text('You must select a drink option!');
	} else {
		$('#drink-error').text('*');
		let drinkValue = $('#drink-selector input[name="drink"]:checked').val();
		localStorage.drink = drinkValue;
		if (drinkValue != 'none') {
			currentPrice += drinkPrice;
		}
	}

	if ($('#output').val()) {
		localStorage.note = $('#note').val();
	}

	return currentPrice;
};

/** THIS IS WHERE YOU LEFT OFF!!! 2/8/2022
 * TODO:
 * -capitalize first letters
 * -serialize toppings w/ split()
 */
const clearDisplay = () => {
	localStorage.removeItem('pizzaSize');
	localStorage.removeItem('toppings');
	localStorage.removeItem('salad');
	localStorage.removeItem('drink');

	$('#output').val('');
};

const updateDisplay = (price) => {
	let output = '';

	let currencyFormatter = new Intl.NumberFormat('en-US', {
		style: 'currency',
		currency: 'USD',
	});
	// update display
	if (
		localStorage.pizzaSize &&
		localStorage.toppings &&
		localStorage.salad &&
		localStorage.drink
	) {
		output += `
    Pizza Size: ${localStorage.pizzaSize}
    Toppings: ${localStorage.toppings}
    Salad: ${localStorage.salad}
    Drink: ${localStorage.drink}
	Note: ${localStorage.note}
    Total: ${currencyFormatter.format(price)}
    `;

		$('#output').val(output);
	} else {
		alert('Please select all required options');
	}
};

// limit max toppings to 5
const limitMaxToppings = () => {
	let max = 5;

	if ($('input[name="toppings"]:checked').length === max) {
		$('input[name="toppings"]').attr('disabled', 'true');
		$('input[name="toppings"]:checked').removeAttr('disabled');
	} else {
		$('input[name="toppings"]').removeAttr('disabled');
	}
};

$(document).ready(() => {
	$('input[name="toppings"]').change(() => {
		limitMaxToppings();
	});

	$('#add-to-box').click(() => {
		let boxPrice = addItems();
		updateDisplay(boxPrice);
	});

	$('#clear-box').click(() => {
		clearDisplay();
	});
});
