function switchLanguage(lang) {
	fetch(`/store-php/language.php?lang=${lang}`, {
		method: 'GET',
		headers: {
			'Content-Type': 'application/json',
		},
	})
		.then((response) => {
			if (!response.ok) {
				throw new Error('Language switch failed');
			}
			return response.json();
		})
		.then((data) => {
			console.log('Language switch successful');
			location.reload();
		})
		.catch((error) => {
			console.error('Error switching language:', error);
		});
}
