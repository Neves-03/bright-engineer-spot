document.addEventListener('DOMContentLoaded', function () {
	var menuButton = document.querySelector('.mobile-menu-button');
	var mobileNavigation = document.querySelector('#mobile-navigation');

	if (menuButton && mobileNavigation) {
		menuButton.addEventListener('click', function () {
			var isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
			menuButton.setAttribute('aria-expanded', String(!isExpanded));
			menuButton.setAttribute('aria-label', isExpanded ? 'Abrir menu' : 'Fechar menu');
			mobileNavigation.hidden = isExpanded;
		});

		mobileNavigation.addEventListener('click', function (event) {
			if (event.target.closest('a')) {
				mobileNavigation.hidden = true;
				menuButton.setAttribute('aria-expanded', 'false');
				menuButton.setAttribute('aria-label', 'Abrir menu');
			}
		});
	}

	document.querySelectorAll('[data-contact-form]').forEach(function (form) {
		var status = form.querySelector('[data-form-status]');

		form.addEventListener('submit', function (event) {
			event.preventDefault();
			status.textContent = 'Formulário validado. Esta é uma demonstração: a mensagem não foi enviada nem guardada.';
			status.hidden = false;
		});

		form.addEventListener('input', function () {
			status.textContent = '';
			status.hidden = true;
		});
	});
});