document
	.getElementById('dropdownButton')
	.addEventListener('click', function () {
		var dropdownContent = document.getElementById('dropdownContent');
		dropdownContent.classList.toggle('hidden');
	});

document.addEventListener('click', function (event) {
	var isClickInside = document
		.getElementById('dropdownButton')
		.contains(event.target);
	var dropdownContent = document.getElementById('dropdownContent');

	if (!isClickInside && !dropdownContent.classList.contains('hidden')) {
		dropdownContent.classList.add('hidden');
	}
});
