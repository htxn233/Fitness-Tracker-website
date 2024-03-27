const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
	event.preventDefault(); // Prevent the default form submission
	// Get values from input fields
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	// Here you can perform authentication using email and password
	// If authentication is successful, redirect user to main page with their data
	window.location.href = "index.html?email=" + email + "&password=" + password;
});