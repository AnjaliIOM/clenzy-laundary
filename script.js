function validateUsername(username) {
     
    var usernameFormat = /^[A-Z][a-zA-Z]*$/;
    return username.match(usernameFormat);
  }




  function validateEmail(email) {
    // Regular expression to validate email format
    var emailFormat = /^[a-z]\w*@(gmail|yahoo)\.(com|co\.in|in)$/;
    return email.match(emailFormat);
  }

  function validateMobileNumber(mobileNumber) {
    // Regular expression to validate 10-digit mobile number starting with '9'
    var mobileNumberFormat = /^[6-9]\d{9}$/;
    return mobileNumber.match(mobileNumberFormat);
  }

  function validatePassword(password) {
    // Validate password length and complexity
    return password.length >= 8 && /[A-Z]/.test(password) && /[a-z]/.test(password) && /\d/.test(password);
}

  // Get form fields
  var usernameField = document.getElementById('username');
  var emailField = document.getElementById('email');
  var passwordField = document.getElementById('password');
  var confirmPasswordField = document.getElementById('confirmpassword');
  var mobileNumberField = document.getElementById('mobileNumber');
  var usernameError = document.getElementById('username-error');
  var emailError = document.getElementById('email-error');
  var passwordError = document.getElementById('password-error');
  var confirmPasswordError = document.getElementById('confirmpassword-error');
  var mobileError = document.getElementById('mobile-error');
