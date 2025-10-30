  const passwordInput = document.getElementById("password");
  const togglePassword = document.getElementById("togglePassword");

  if (passwordInput && togglePassword) {
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
  }

const formLink = document.querySelector("a[href='login.php']");

if (formLink) {
  formLink.addEventListener("click", (e) => {
    e.preventDefault();
    const posters = document.querySelector(".posters");

    setTimeout(() => {
      window.location.href = "login.php";
    }, 800);
  });
}

// Check for login error and show popup
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('error') === '1') {
  showErrorPopup("Password or Username incorrect");
}

function showErrorPopup(message) {
  const popup = document.createElement('div');
  popup.textContent = message;
  popup.style.position = 'fixed';
  popup.style.top = '0';
  popup.style.left = '50%';
  popup.style.transform = 'translateX(-50%)';
  popup.style.backgroundColor = '#ff4d4d';
  popup.style.color = 'white';
  popup.style.padding = '10px 20px';
  popup.style.borderRadius = '5px';
  popup.style.zIndex = '1000';
  popup.style.fontSize = '16px';
  popup.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';

  document.body.appendChild(popup);

  setTimeout(() => {
    popup.remove();
  }, 3000);
}
