document.addEventListener("DOMContentLoaded", function () {
  var loginForm = document.getElementById("loginForm");
  var loginStatus = document.getElementById("loginStatus");
  var username = document.getElementById("username");
  var password = document.getElementById("password");

  var params = new URLSearchParams(window.location.search);
  if (params.has("enviar")) {
    loginStatus.textContent = "Login success!";
    username.textContent = params.get("username");
    password.textContent = params.get("password");
  } else {
    loginStatus.textContent = "Login error!";
  }
});