var show = false; 

function showForm() {
	if(show == false) {
		document.getElementsByClassName('background')[0].style.display = 'flex';
		document.getElementsByClassName('registration-form')[0].style.display = 'flex';
		show = true;
	} else {
		document.getElementsByClassName('background')[0].style.display = 'none';
		show = false;
	}
}