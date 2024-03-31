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

const leftPane = document.querySelector('.left-pane');
const centerPane = document.querySelector('.center-pane');
const rightPane = document.querySelector('.right-pane');

// Thiết lập tốc độ di chuyển và khoảng cách giữa các ảnh
const speed = 1; // Điều chỉnh tốc độ di chuyển ở đây
const gap = 50; // Điều chỉnh khoảng cách giữa các ảnh ở đây

// Hàm di chuyển ảnh
function moveImages() {
	// Di chuyển các ảnh xuống dưới
	leftPane.style.top = `${parseInt(leftPane.style.top || 0) + speed}px`;
	centerPane.style.top = `${parseInt(centerPane.style.top || 0) + speed}px`;
	rightPane.style.top = `${parseInt(rightPane.style.top || 0) + speed}px`;

	// Kiểm tra nếu ảnh đã di chuyển ra khỏi vùng hiển thị
	if (parseInt(leftPane.style.top) >= window.innerHeight) {
		leftPane.style.top = `-${leftPane.offsetHeight - gap}px`; // Di chuyển ảnh lên trên
	}
	if (parseInt(centerPane.style.top) >= window.innerHeight) {
		centerPane.style.top = `-${centerPane.offsetHeight - gap}px`; // Di chuyển ảnh lên trên
	}
	if (parseInt(rightPane.style.top) >= window.innerHeight) {
		rightPane.style.top = `-${rightPane.offsetHeight - gap}px`; // Di chuyển ảnh lên trên
	}
}

// Thiết lập hàm setInterval để gọi hàm moveImages mỗi 10ms
setInterval(moveImages, 1000);