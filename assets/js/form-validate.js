var namePattern = /^[a-z A-Z]{4,60}$/;
var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
var phoneNumberPattern = /^[0-9]{11}$/;


function checkInput(idInput, pattern) {
return $(idInput).val().match(pattern) ? true : false;
}


$(document).ready(function() {
    var isValid = false;

    $('#user-form #submit').on("click", function() {
       $('#user-form').submit(function(e) {
            if (!isValid) {
                console.log('hay errores');
                e.preventDefault();
            }
       });
    });

    $('#user-form #inputName, #user-form #inputEmail, #user-form #inputPhoneNumber').on("blur", function(e) {
        var targetId = e.target.id;

        switch(targetId) {
            case 'inputName': {
                if(!checkInput("#inputName", namePattern)) {
                    isValid = false;
                    $('#user-form .form-group:nth-child(1) .form-control').addClass('is-invalid');
                    return;
                }
                $('#user-form .form-group:nth-child(1) .form-control').removeClass('is-invalid');
                isValid = true;
                break;
            }
            case 'inputEmail': {
                if(!checkInput("#inputEmail", emailPattern)) {
                    isValid = false;
                    $('#user-form .form-group:nth-child(2) .form-control').addClass('is-invalid');
                    return;
                }
                $('#user-form .form-group:nth-child(2) .form-control').removeClass('is-invalid');
                isValid = true;
                break;
            }
            case 'inputPhoneNumber': {
                if(!checkInput("#inputPhoneNumber", phoneNumberPattern)) {
                    isValid = false;
                    $('#user-form .form-group:nth-child(3) .form-control').addClass('is-invalid');
                    return;
                }
                $('#user-form .form-group:nth-child(3) .form-control').removeClass('is-invalid');
                isValid = true;
                break;
            }
        }
    });
});