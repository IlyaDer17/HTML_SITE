$(document).ready(function(){
	$('#contact form').on('submit', function(e){
		e.preventDefault();
		var $form = $(e.currentTarget), 
		$email = $form.find('#contact-email'),
		$button = $form.find('button[type=submit]');
		if ($email.val().indexOf('@') == -1){
			vaca = $email.closest('form-group')
			$email.closest('.form-control').addClass('is-invalid');
		} else {
			$form.find('.form-control').addClass('is-valid').removeClass('is-invalid');
			$button.attr('disabled', 'disabled');
			$button.after('<span> Сообщение отправлено. Мы скоро с Вами свяжемся</span>');
		}
	});
});