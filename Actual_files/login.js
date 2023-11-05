document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const usernameInput = form.querySelector("input[type='text']");
    const passwordInput = form.querySelector("input[type='password']");
    const submitButton = form.querySelector("input[type='submit']");
  
    form.onsubmit = function (e) {
      e.preventDefault();
  
      if (usernameInput.value === "") {
        showError(usernameInput, "Username can't be blank");
      } else {
        removeError(usernameInput);
      }
  
      if (passwordInput.value === "") {
        showError(passwordInput, "Password can't be blank");
      } else {
        removeError(passwordInput);
      }
  
      if (usernameInput.value !== "" && passwordInput.value !== "") {
        // You can add your login logic here
        // For example, you can send a request to the server to authenticate the user
        // If the authentication is successful, you can redirect the user to the desired page.
      }
    };
  
    usernameInput.onkeyup = function () {
      if (usernameInput.value !== "") {
        removeError(usernameInput);
      }
    };
  
    passwordInput.onkeyup = function () {
      if (passwordInput.value !== "") {
        removeError(passwordInput);
      }
    };
  
    function showError(input, errorMessage) {
      input.parentElement.classList.add("error");
      const errorTxt = input.parentElement.querySelector(".error-txt");
      errorTxt.innerText = errorMessage;
    }
  
    function removeError(input) {
      input.parentElement.classList.remove("error");
      const errorTxt = input.parentElement.querySelector(".error-txt");
      errorTxt.innerText = "";
    }
  });
  