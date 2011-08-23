/**
 * Implementation of Drupal behavior.
 */
Drupal.behaviors.ideal_protest = function(context) {
  $('.regular-login').hide();
	$('.login-link').click(function(){
		$('.regular-login').show();
	});
};
