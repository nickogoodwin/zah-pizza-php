/**Nicko Goodwin
 * Created on 2/10/2022
 *
 * 2/10/2022
 *  -Added Date-time in the footer
 */
'use strict';

const getTime = () => {
	setInterval(() => {
		let today = new Date();
		let dateString = today.toDateString();
		let hours = today.getHours();
		let minutes = today.getMinutes();
		let seconds = today.getSeconds();

		//format for AM/PM
		let ampm = hours >= 12 ? 'PM' : 'AM';
		hours = hours % 12;
		if (hours == 0) {
			hours = 12;
		}

		if (seconds < 10) {
			seconds = `0${today.getSeconds()}`;
		} else {
			seconds = today.getSeconds();
		}

		$('#time-display').text(
			`${dateString} ${hours}:${minutes}:${seconds} ${ampm}`
		);
	}, 1000);
};

$(document).ready(() => {
	getTime();
});
