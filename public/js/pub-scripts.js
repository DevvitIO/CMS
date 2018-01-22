// Switching between sign up and login forms
var signupForm = $("#signup-form");
var loginForm = $("#login-form");
var authLi = $(".auth-action-list-item");
var termsParagraph = $(".signup-terms");

authLi.each(function() {
	$(this).on("click", function() {
		if(!$(this).hasClass("auth-action-list-item-active")) {
			authLi.toggleClass("auth-action-list-item-active");
			signupForm.toggleClass("signup-form-disabled");
			loginForm.toggleClass("signup-form-disabled");
			termsParagraph.toggle("display", "none");
		}	
	});
});