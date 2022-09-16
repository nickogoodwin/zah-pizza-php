/******
	Nicko Goodwin
	Created on 1/28/2022

	1/28/2022
		-wrote js for FAQ
		
	2/2/2022
		-re-wrote js to use Jquery UI accordion

******/

//jquery UI accordion
$(document).ready(() => {
	const icons = { header: 'ui-icon-plus', activeHeader: 'ui-icon-minus' };
	$('#accordion').accordion({
		icons: icons,
		collapsible: true,
	});
});

/********** OLD Accordion Code************/
// jquery without the jquery
// const $ = (selector) => document.querySelector(selector);

// const toggle = (evt) => {
// 	const aElement = evt.currentTarget;
// 	const h3Element = aElement.parentNode;
// 	const divElement = h3Element.nextElementSibling;
// 	const iElement = aElement.firstChild;

// 	// toggle icon change
// 	if (iElement.className == 'bi bi-plus-circle') {
// 		iElement.className = 'bi bi-file-minus';
// 	} else {
// 		iElement.className = 'bi bi-plus-circle';
// 	}

// 	// toggle div display
// 	if (divElement.hasAttribute('class')) {
// 		divElement.removeAttribute('class');
// 	} else {
// 		divElement.className = 'open';
// 	}

// 	evt.preventDefault();
// };

// document.addEventListener('DOMContentLoaded', () => {
// 	//get links
// 	const aElements = document.querySelectorAll('#faq .section-text a');

// 	for (let aElement of aElements) {
// 		aElement.addEventListener('click', toggle);
// 	}
// });
