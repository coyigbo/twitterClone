// STORE ALL INPUT BOXES IN VARIABLES
let username = document.getElementById("username");
let first_name = document.getElementById("first_name");
let last_name = document.getElementById("last_name");
let email = document.getElementById("email");
let dob = document.getElementById("dob");
let password = document.getElementById("password");
let confirm_password = document.getElementById("confirm_password");

// ADD EVENT LISTENERS TO INPUTS
username.addEventListener("click", usernameValidation);
username.addEventListener("blur", usernameValidation);

first_name.addEventListener("click", firstNameValidation);
first_name.addEventListener("blur", firstNameValidation);

last_name.addEventListener("click", lastNameValidation);
last_name.addEventListener("blur", lastNameValidation);

email.addEventListener("click", emailValidation);
email.addEventListener("blur", emailValidation);

dob.addEventListener("click", dobValidation);
dob.addEventListener("blur", dobValidation);

password.addEventListener("click", passwordValidation);
password.addEventListener("blur", passwordValidation);

confirm_password.addEventListener("click", confirmPasswordValidation);
confirm_password.addEventListener("blur", confirmPasswordValidation);

// VALIDATION FUNCTIONS
function usernameValidation() {
  username_value = username.value
  username_regex = /^[a-z0-9_]{5,15}$/;

  if (username_regex.test(username_value)) {
    username.style.borderColor = "green";
  } else {
    username.style.borderColor = "red";
  }
} // end username validation

function firstNameValidation() {
  first_name_value = first_name.value
  first_name_regex = /^[a-zA-Z.-]{1,50}$/;

  if (first_name_regex.test(first_name_value)) {
    first_name.style.borderColor = "green";
  } else {
    first_name.style.borderColor = "red";
  }
} // end first name validation

function lastNameValidation() {
  last_name_value = last_name.value;
  last_name_regex = /^[a-zA-Z.-]{1,50}$/;

  if (last_name_regex.test(last_name_value)) {
    last_name.style.borderColor = "green";
  } else {
    last_name.style.borderColor = "red";
  }
} // end last name validation

function emailValidation() {
  email_value = email.value;
  email_regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;

  if (email_regex.test(email_value)) {
    email.style.borderColor = "green";
  } else {
    email.style.borderColor = "red";
  }
} // end email validation

function dobValidation() {

} // end dob validation

function passwordValidation() {
  password_value = password.value;
  password_regex = /^.{8,255}$/;

  if (password_regex.test(password_value)) {
    password.style.borderColor = "green";
  } else {
    password.style.borderColor = "red";
  }
} // end password validation

function confirmPasswordValidation() {
  password_value = password.value;
  confirm_password_value = confirm_password.value;
  password_regex = /^.{8,255}$/;

  if (password_regex.test(confirm_password_value)) {
    password.style.borderColor = "green";
  } else if (confirm_password_value !== password_value) {
    password.style.borderColor = "red";
    confirm_password.style.borderColor = "red";
  } else if (confirm_password_value === password_value) {
    password.style.borderColor = "green";
    confirm_password.style.borderColor = "green";
  } else {
    password.style.borderColor = "red";
  }
} // end confirm password validation
