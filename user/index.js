document.addEventListener("DOMContentLoaded", function() {
  const loginStatus = document.getElementById("loginStatus");
  const usernameField = document.getElementById("username");
  const passwordField = document.getElementById("password");

  const params = new URLSearchParams(window.location.search);
  if (params.has("username") && params.has("password")) {
    loginStatus.textContent = "Login success!";
    usernameField.textContent = params.get("username");
    passwordField.textContent = params.get("password");
  }
});
