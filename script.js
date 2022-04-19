var username = document.getElementById('username');
var usererror = document.getElementById('usererror');
var password = document.getElementById('password');
var passerror = document.getElementById('passerror');
var cpassword = document.getElementById('cpassword');
var cpasserror = document.getElementById('cpasserror');



function validation() {
    if (username.value == "") {
        username.style.borderColor = 'red';
        username.style.borderWidth = '2px';
        usererror.innerHTML = 'fill the username Please!'
        return false
    }

    if (!validateUsername(username.value)) {
        username.style.borderColor = 'red';
        username.style.borderWidth = '2px';
        usererror.style.color = 'red';
        usererror.innerHTML = "The username should contain over 3 numbers or/and letters";
        return false
    } else {
        username.style.borderColor = 'green';
        username.style.borderWidth = '2px';
        usererror.innerHTML = "Looks good";
        usererror.style.color = 'green';
    }






    if (password.value == "") {
        password.style.borderColor = 'red';
        password.style.borderWidth = '2px';
        passerror.style.color = 'red';
        passerror.innerHTML = "fill the password Please!";
        return false
    }

    if (validatePassword(password.value)) {
        password.style.borderColor = 'red';
        password.style.borderWidth = '2px';
        passerror.style.color = 'red';
        passerror.innerHTML = "The password should contain only numbers and letters";
        return false
    } else if (password.value.length < 6) {
        password.style.borderColor = 'red';
        password.style.borderWidth = '2px';
        passerror.style.color = 'red';
        passerror.innerHTML = "The password must be at least 6 characters";
        return false
    } else {
        password.style.borderColor = 'green';
        password.style.borderWidth = '2px';
        passerror.innerHTML = "Looks good";
        passerror.style.color = 'green';
    }





    if (cpassword.value == "") {
        cpassword.style.borderColor = 'red';
        cpassword.style.borderWidth = '2px';
        cpasserror.innerHTML = "fill the password verify Please!";
        return false
    }

    if (cpassword.value != password.value) {
        cpassword.style.borderColor = 'red';
        cpassword.style.borderWidth = '2px';
        cpasserror.innerHTML = "The password verify does not match the password!";
        return false
    } else {
        return true
    }


    function validateUsername(username) {
        var re = /^[a-zA-Z]{3,20}$/;
        return re.test(username);
    }

    function validatePassword(password) {
        var re = /\"|\#|\'|\*|\?|\!|\-/;
        return re.test(password);
    }
}



// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();