// Client-side validation for the login form
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  if (form) {
    form.addEventListener("submit", function (e) {
      const username = form.username.value.trim();
      if (username.length === 0) {
        alert("Username is required.");
        e.preventDefault();
      }
    });
  }
});
