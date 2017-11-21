var show = false; 

function showRegForm() {
	if(show == false) {
		document.getElementsByClassName('background')[0].style.display = 'flex';
		document.getElementById('registration-form').style.display = 'flex';
		show = true;
	}
}

function showLoginForm() {
	if(show == false) {
		document.getElementsByClassName('background')[0].style.display = 'flex';
		document.getElementById('login-form').style.display = 'flex';
		show = true;
	}
}

function closeForm() {
        document.getElementsByClassName('background')[0].style.display = 'none';
        document.getElementsByClassName('error')[0].innerHTML = '';
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('registration-form').style.display = 'none';
		show = false;
}

function validate() {
    password = document.getElementsByClassName('password');
    document.getElementsByClassName('error')[0].innerHTML = '';
    if (password[0].value != password[1].value) {
        document.getElementsByClassName('error')[0].innerHTML = 'Пароли должны совпадать';
//        return false;
    } else {
        document.getElementById('registration-form').submit();
//        return true;
    }
}