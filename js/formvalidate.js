	$().ready(function() {
		
		jQuery.validator.addMethod("notEqualTo",
function(value, element, param) {
    var notEqual = true;
    value = $.trim(value);
    for (i = 0; i < param.length; i++) {
        if (value == $.trim($(param[i]).val())) { notEqual = false; }
    }
    return this.optional(element) || notEqual;
},
"Please enter a diferent value."
);
		// validate signup form on keyup and submit
		$(".reg-form").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				country: "required",
				emailaddress: {
					required: true,
					email: true
				},
				phonenumber: {
					required: true,
					number: true
				},
				
				
				country: {
					required: true,
					notEqualTo: "Country"
				},

				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				emailaddress: "Please enter a valid email address",
				agree: "Please accept our policy",
				topic: "Please select at least 2 topics"
			}
		});

	});
