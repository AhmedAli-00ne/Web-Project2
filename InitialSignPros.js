$(document).ready(function() {
    $('#SignUp').click(function(event) {
        event.preventDefault();
        console.log('hello');
        const email = $('#email').val();
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();
        const firstName = $('#firstName').val();
        const lastName = $('#lastName').val();
        const phoneNumber = $('#phoneNumber').val();
        const age = $('#age').val();
        console.log(email);
        console.log(password);
        console.log(confirmPassword);
        console.log(firstName);
        console.log(lastName);
        console.log(phoneNumber);
        console.log(typeof(age));
        $.post('register.php', {postemail: email, postpassword: password, postconfirmPassword: confirmPassword, postfirstName: firstName, postlastName: lastName, postphoneNumber: phoneNumber, postage: age}, function(data) {
            console.log(data);
        });
    });
});