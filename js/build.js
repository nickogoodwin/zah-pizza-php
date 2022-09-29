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

let sizeEl = document.querySelectorAll('input[name="size"]')
let toppingsEl = document.querySelectorAll('input[name="toppings"]')
let saladEl = document.querySelectorAll('input[name="salad"]')
let drinkEl = document.querySelectorAll('input[name="drink"]')

const addItems = () => {
	localStorage.pizzaSize = '';
	localStorage.toppings = '';
	localStorage.salad = '';
	localStorage.drink = '';
	localStorage.note = '';

	let currentPrice = 0.0;

	let selectedSize = document.querySelectorAll('input[name="size"]:checked')
	let selectedToppings = document.querySelectorAll('input[name="toppings"]:checked')
	let selectedSalad = document.querySelectorAll('input[name="salad"]:checked')
	let selectedDrink = document.querySelectorAll('input[name="drink"]:checked')

	let sizeError = document.querySelector('#size-error')
	let saladError = document.querySelector('#salad-error')
	let drinkError = document.querySelector('#drink-error')

	// Size
	//make sure something is selected
	if (selectedSize.length < 1) {
		sizeError.textContent = 'You must select a size option!';
	} else {
		sizeError.textContent = '*';
		let sizeValue = selectedSize[0].value;
		console.log(sizeValue)
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
	if (selectedToppings.length < 1) {
		localStorage.toppings = 'none';
	} else {
		selectedToppings.forEach((topping) => {
			localStorage.toppings += `${topping.value} `
			currentPrice += toppingsPrice;
		})
	}

	//Salad
	if (selectedSalad.length < 1) {
		saladError.textContent = 'You must select a salad option!';
	} else {
		saladError.textContent = '*';
		let saladValue = selectedSalad[0].value
		
		console.log(saladValue)

		localStorage.salad = saladValue;
		if (selectedSalad != 'none') {
			currentPrice += saladPrice;
		}
	}

	//Drink
	if (selectedDrink.length < 1) {
		drinkError.textContent = 'You must select a drink option!';
	} else {
		drinkError.textContent = '*';
		let drinkValue = selectedDrink[0].value;

		localStorage.drink = drinkValue;
		if (drinkValue != 'none') {
			currentPrice += drinkPrice;
		}
	}

	//note
	localStorage.note = `${document.querySelector('#note').value}`

	return currentPrice;
};

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
	\n
    Total: ${currencyFormatter.format(price)}
    `;

		document.querySelector('#output').value = output;
	} else {
		alert('Please select all required options');
	}
};

// limit max toppings to 5
const limitMaxToppings = () => {
	let max = 5;
	let selectedToppings = document.querySelectorAll('input[name="toppings"]:checked')

	if (document.querySelectorAll('input[name="toppings"]:checked').length === max) {
		toppingsEl.forEach((topping) => {
			topping.setAttribute('disabled', 'true')
		});
		selectedToppings.forEach((checkedTopping) => {
			checkedTopping.removeAttribute('disabled')
		})
	} else {
		toppingsEl.forEach((topping) => {
			topping.removeAttribute('disabled', 'true')
		})
	}
};

toppingsEl.forEach((topping) => {
	topping.addEventListener('change', limitMaxToppings)
})

document.querySelector('#add-to-box').addEventListener('click', () => {
	let boxPrice = addItems();
	updateDisplay(boxPrice);
})

document.querySelector('#clear-box').addEventListener('click', clearDisplay)
