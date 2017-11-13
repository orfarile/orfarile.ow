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

function validate() {
    password = document.getElementsByClassName('password');
    document.getElementsByClassName('error')[0].innerHTML = '';
    if (password[0].value != password[1].value) {
        document.getElementsByClassName('error')[0].innerHTML = 'Пароли должны совпадать';
        return false;
    } else {
        document.getElementsByClassName('registration-form')[0].submit();
        return true;
    }
}