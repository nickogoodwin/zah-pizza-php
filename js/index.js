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
******/
const updatePricing = () => {
	//set default values
	let basicPrice = 49.99;
	let deluxePrice = 59.99;
	let ultimatePrice = 69.99;

	//get range slider value
	let toppings = $('#toppings').val();
	//calculate dollar amount ($2.00 per topping)
	let amount = toppings * 2;

	//update toppings-output with value of slider
	$('#toppings-output').text(toppings);

	//update pricing
	$('#basic-price').text(`$${(basicPrice + amount).toFixed(2)}/mo`);
	$('#deluxe-price').text(`$${(deluxePrice + amount).toFixed(2)}/mo`);
	$('#ultimate-price').text(`$${(ultimatePrice + amount).toFixed(2)}/mo`);
};

$(document).ready(() => {
	$('#toppings').on('input', () => {
		updatePricing();
	});

	// Image rollovers
	$('#image1').hover(
		() => {
			$('#image1').attr('src', 'img/rollover/pizza4.jpg');
		},
		() => {
			$('#image1').attr('src', 'img/rollover/pizza1.jpg');
		}
	);
	$('#image2').hover(
		() => {
			$('#image2').attr('src', 'img/rollover/pizza5.jpg');
		},
		() => {
			$('#image2').attr('src', 'img/rollover/pizza2.jpg');
		}
	);
	$('#image3').hover(
		() => {
			$('#image3').attr('src', 'img/rollover/pizza6.jpg');
		},
		() => {
			$('#image3').attr('src', 'img/rollover/pizza3.jpg');
		}
	);
});

// // jquery without the jquery
// const $ = (selector) => document.querySelector(selector);

// // get elements
// let output = $('#toppings-output');
// let basic = $('#basic-price');
// let deluxe = $('#deluxe-price');
// let ultimate = $('#ultimate-price');

// //set default values
// let basicPrice = 49.99;
// let deluxePrice = 59.99;
// let ultimatePrice = 69.99;

// // update pricing
// const updatePricing = (toppings) => {
// 	output.innerHTML = toppings;

// 	let amount = toppings * 2;
// 	basic.innerHTML = `$${(basicPrice + amount).toFixed(2)}/mo`;
// 	deluxe.innerHTML = `$${(deluxePrice + amount).toFixed(2)}/mo`;
// 	ultimate.innerHTML = `$${(ultimatePrice + amount).toFixed(2)}/mo`;
// };

// /****** Rollover ******/

// document.addEventListener('DOMContentLoaded', () => {
// 	let image1 = $('#image1');
// 	let image2 = $('#image2');
// 	let image3 = $('#image3');

// 	//preload images
// 	let imageLinks = $('#image-list').querySelectorAll('a');
// 	for (let imageLink of imageLinks) {
// 		const image = new Image();
// 		image.src = imageLink.href;
// 	}

// 	//set mouseover & mouseout image swap
// 	for (let imageLink of imageLinks) {
// 		image1.addEventListener('mouseover', () => {
// 			image1.src = 'img/rollover/pizza4.jpg';
// 		});
// 		image1.addEventListener('mouseout', () => {
// 			image1.src = 'img/rollover/pizza1.jpg';
// 		});

// 		image2.addEventListener('mouseover', () => {
// 			image2.src = 'img/rollover/pizza5.jpg';
// 		});
// 		image2.addEventListener('mouseout', () => {
// 			image2.src = 'img/rollover/pizza2.jpg';
// 		});

// 		image3.addEventListener('mouseover', () => {
// 			image3.src = 'img/rollover/pizza6.jpg';
// 		});
// 		image3.addEventListener('mouseout', () => {
// 			image3.src = 'img/rollover/pizza3.jpg';
// 		});
// 	}
// });
