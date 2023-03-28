$(document).ready(function() {
  $('#registration-form').submit(function(event) {
    var username = $('#username').val();
    var email = $('#email').val();
    var mobnumber = $('#mobnumber').val();
    var password = $('#password').val();
    var passwordConfirm = $('#password-confirm').val();

    var errors = [];

    if (username.trim() === '') {
      errors.push('Please enter your name');
    }

    if (email.trim() === '') {
      errors.push('Please enter your email');
    } else if (!isValidEmail(email)) {
      errors.push('Please enter a valid email');
    }
    if(mobnumber.trim() === ''){
      errors.push('enter your mob number');
    }else if(mobnumber.length === 10){
      errors.push('enter 10 digit mob number')
    }
    if (password.trim() === '') {
      errors.push('Please enter a password');
    } else if (password.length < 8) {
      errors.push('Password must be at least 8 characters long');
    }

    if (passwordConfirm.trim() === '') {
      errors.push('Please confirm your password');
    } else if (password !== passwordConfirm) {
      errors.push('Passwords do not match');
    }

    if (errors.length > 0) {
      event.preventDefault();
      alert(errors.join('\n'));
    }
  });

  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
});
