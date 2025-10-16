  const passwordInput = document.getElementById("password");
  const togglePassword = document.getElementById("togglePassword");

  togglePassword.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";

    passwordInput.type = isPassword ? "text" : "password";

    if (isPassword) {

      togglePassword.classList.remove("fa-eye-slash");
      togglePassword.classList.add("fa-eye");
    } else {
      togglePassword.classList.remove("fa-eye");
      togglePassword.classList.add("fa-eye-slash");
    }
  });


const formLink = document.querySelector("a[href='login.php']");

formLink.addEventListener("click", (e) => {
  e.preventDefault();
  const posters = document.querySelector(".posters");

  setTimeout(() => {
    window.location.href = "login.php";
  }, 800); 
});
