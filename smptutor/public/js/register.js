const tutorButton = document.getElementById('tutor');
const studentButton = document.getElementById('student');
const container = document.getElementById('container');

tutorButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

studentButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});